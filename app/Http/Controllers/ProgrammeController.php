<?php

namespace App\Http\Controllers;

use App\Models\Programme;
use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $data_postgraduate = Programme::orderBy('id','DESC')->where('level', 'postgraduate')->paginate(5);
      $data_undergraduate = Programme::orderBy('id','DESC')->where('level', 'undergraduate')->paginate(5);
      $data_diploma = Programme::orderBy('id','DESC')->where('level', 'diploma')->paginate(5);

      return view('programmes.index',compact(['data_postgraduate', 'data_undergraduate', 'data_diploma']))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('programmes.create');
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
        'level'=> 'required',
        'requirements'=> 'required'
      ]);

      $input = $request->all();

      $message = Programme::create($input);

      return redirect()->route('programs.index')
                    ->with('success','Program created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function show(Programme $programme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $program = Programme::find($id);
      return view('programmes.edit',compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programme $programme, $id)
    {
      $this->validate($request, [
        'name' => 'required',
        'level'=> 'required',
        'requirements'=> 'required'
      ]);

      $input = $request->all();

      $program = Programme::find($id);
      $program->update($input);

      return redirect()->route('programs.index')
                    ->with('success','Program edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Programme::find($id)->delete();
      return redirect()->route('programs.index')
                      ->with('success','Activity deleted successfully');
    }
}
