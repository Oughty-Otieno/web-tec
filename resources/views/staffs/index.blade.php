@extends('layouts.main')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Activities</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('/home') }}"> Back</a>
        </div>

        @auth
        <div class="pull-right">
            <a class="btn btn-margin btn-success" href="{{ route('staffs.create') }}">Create a Staff member</a>
        </div>
        @endauth


    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

@foreach($data as $staff)
<div class="card card-margin">
  <div class="card-header">
    {{$staff->name}}
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-sm-2">
        <div class="card">
          <div class="card-body ">
            <img class="dir" src="{{url('storage/'.$staff->photo)}}">
          </div>
        </div>
      </div>

      <div class="col-sm-10">
        <div class="card">
          <div class="card-body">
            <p class="card-text">
              {{$staff->title}}
            </p>
            @auth
            <a class="btn btn-margin btn-success" href="{{ route('staffs.edit',$staff->id) }}">Edit</a>
            <form action="{{ route('staffs.destroy', $staff->id) }}" type="submit" method='post' >
                  @csrf
                  @method('delete')
                <button  type="submit" class="btn btn-danger ">Delete</button>
              </form>
              @endauth
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach



@endsection
