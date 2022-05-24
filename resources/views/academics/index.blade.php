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
            <a class="btn btn-success" href="{{ route('academics.create') }}">Create a new Academic Activity</a>
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
   <th>Requirement</th>
   <th>Date</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $activity)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $activity->name }}</td>
    <td>{{ $activity->requirements}}</td>
    <td>{{ $activity->dates}}</td>
    <td>
       <a class="btn btn-info" href="{{ route('o_activity.show',$activity) }}">Show</a>
       <a class="btn btn-primary" href="{{ route('o_activity.edit',$activity) }}">Edit</a>

    </td>
  </tr>
 @endforeach
</table>

{!! $data->render() !!}

@endsection
