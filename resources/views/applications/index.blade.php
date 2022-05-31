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
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th>Level</th>
   <th>Course</th>
   <th>Date</th>
 </tr>
 @foreach ($data as $key => $application)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $application->name }}</td>
    <td>{{ $application->email}}</td>
    <td>{{ $application->level}}</td>
    <td>{{ $application->course}}</td>
    <td>{{ $application->created_at}}</td>
  </tr>
 @endforeach
</table>



@endsection
