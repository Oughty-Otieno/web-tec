<?php

namespace App\Http\Controllers;

use App\Models\Academic;
use Illuminate\Http\Request;

class AcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $data = Academic::orderBy('id','DESC')->paginate(5);
      return view('academics.index',compact('data'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('academics.create');
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
        'type' => 'required',
        'name' => 'required',
        'requirements'=> 'required',
        'dates'=> 'required'
      ]);

      $input = $request->all();

      $message = Academic::create($input);

      return redirect()->route('academics.index')
                    ->with('success','Academic program created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function show(Academic $academic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $academic = Academic::find($id);
      return view('academics.edit',compact('academic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'type' => 'required',
        'name' => 'required',
        'requirements'=> 'required',
        'dates'=> 'required'
      ]);

      $input = $request->all();

      $academic = Academic::find($id);
      $academic->update($input);
    
      return redirect()->route('academics.index')
                    ->with('success','Academic program created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Academic::find($id)->delete();
      return redirect()->route('academics.index')
                      ->with('success','Activity deleted successfully');
    }
}
