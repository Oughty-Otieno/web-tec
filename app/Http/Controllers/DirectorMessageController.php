<?php

namespace App\Http\Controllers;

use App\Models\DirectorMessage;
use Illuminate\Http\Request;

class DirectorMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $data = DirectorMessage::orderBy('id','DESC')->paginate(5);
      return view('d_message.index',compact('data'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('d_message.create');
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
        'message' => 'required',
      ]);

      $input = $request->all();

      $message = DirectorMessage::create($input);

      return redirect()->route('d_message.index')
                    ->with('success','Message created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DirectorMessage  $directorMessage
     * @return \Illuminate\Http\Response
     */
    public function show(DirectorMessage $directorMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DirectorMessage  $directorMessage
     * @return \Illuminate\Http\Response
     */
    public function edit(DirectorMessage $directorMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DirectorMessage  $directorMessage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DirectorMessage $directorMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DirectorMessage  $directorMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(DirectorMessage $directorMessage)
    {
        //
    }
}
