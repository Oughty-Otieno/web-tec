<?php

namespace App\Http\Controllers;

use App\Models\OngoingActivity;
use Illuminate\Http\Request;

class OngoingActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $data = OngoingActivity::orderBy('id','DESC')->paginate(5);
      return view('o_activity.index',compact('data'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('o_activity.create');
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
        'activity' => 'required',
      ]);

      $input = $request->all();

      $message = OngoingActivity::create($input);

      return redirect()->route('o_activity.index')
                    ->with('success','Activity created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OngoingActivity  $ongoingActivity
     * @return \Illuminate\Http\Response
     */
    public function show(OngoingActivity $ongoingActivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OngoingActivity  $ongoingActivity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $activity = OngoingActivity::find($id);
      return view('o_activity.edit',compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OngoingActivity  $ongoingActivity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'activity' => 'required',
      ]);

      $input = $request->all();

      $activity = OngoingActivity::find($id);
      $activity->update($input);


      return redirect()->route('o_activity.index')
                    ->with('success','Activity editted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OngoingActivity  $ongoingActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      OngoingActivity::find($id)->delete();
      return redirect()->route('o_activity.index')
                      ->with('success','Activity deleted successfully');
    }
}
