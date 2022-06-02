<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $data = Staff::orderBy('id','DESC')->paginate(5);

      return view('staffs.index',compact('data'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'name' => 'required',
        'title'=> 'required',
        'photo'=> 'required'
      ]);

      $photo = $request->file('photo');
      $extension = $photo->getClientOriginalExtension();
      Storage::disk('public')->put($photo->getFilename().'.'.$extension,  File::get($photo));

      $staff = new Staff([
         'name' => $request->get('name'),
         'title' => $request->get('title'),
         'photo' =>$photo->getFilename().'.'.$extension
     ]);
     $staff->save();

      return redirect()->route('staffs.index')
                    ->with('success','Staff created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $staff = Staff::find($id);
      return view('staffs.edit',compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
      $this->validate($request, [
        'name' => 'required',
        'title'=> 'required',
      ]);

      $photo = $request->file('photo');
      if($photo !=null)
      {
        $extension = $photo->getClientOriginalExtension();
        Storage::disk('public')->put($photo->getFilename().'.'.$extension,  File::get($photo));
        $input = [
           'name' => $request->get('name'),
           'title' => $request->get('title'),
           'photo' =>$photo->getFilename().'.'.$extension
       ];
      } else {
        $input = [
           'name' => $request->get('name'),
           'title' => $request->get('title'),
       ];
      }

     $staff = Staff::find($id);
     $staff->update($input);

      return redirect()->route('staffs.index')
                    ->with('success','Staff created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Staff::find($id)->delete();
      return redirect()->route('staffs.index')
                      ->with('success','Staff deleted successfully');
    }
}
