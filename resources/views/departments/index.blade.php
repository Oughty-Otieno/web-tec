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

        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('departments.create') }}">Create a Department</a>
        </div>


    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

@foreach($data as $department)
<div class="card card-margin">
  <div class="card-header">
    {{$department->name}}
  </div>
  <div class="card-body">
    <h5 class="card-title">A brief description</h5>
    <p class="card-text">
      {{$department->description}}
      </p>
  </div>
</div>
@endforeach



@endsection
