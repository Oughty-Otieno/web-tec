@extends('layouts.main')

@section('content')
                  <div class="card card-margin">
                    <div class="card-header">
                      Message from Director
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-2">
                          <div class="card">
                            <div class="card-body ">
                              <img class="dir" src="{{ URL::to('/images/dir.jfif') }}">
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-10">
                          <div class="card">
                            <div class="card-body">
                      <p class="card-text">
                        {{$director_message->message}}
                      </p>
                      </div>
                    </div>
                   </div>
                  </div>
                  @auth
                      <a href="{{ route('d_message.index') }}" class="btn btn-primary">View all messages</a>
                  @endauth
                    </div>
                  </div>

                  <div class="card card-margin">
                    <div class="card-header">
                      Current Activites
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Within this semester the following are ongoing</h5>
                      <p class="card-text">
                        <ol>
                          @foreach ($ongoing_activities as $key => $activity)
                           <li>{{$activity->activity}}</li>
                          @endforeach
                        </ol>
                        </p>
                        @auth
                        <a href="{{ route('o_activity.index') }}" class="btn btn-primary">View all activities</a>
                        @endauth
                    </div>
                  </div>

                  <div class="row card-margin">
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">How to appy</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Apply Now</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Payment Methods</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                  </div>
@endsection
