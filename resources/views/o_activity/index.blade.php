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
            <a class="btn btn-margin btn-success" href="{{ route('o_activity.create') }}">Create a new Activity</a>
        </div>
        @endauth

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
   <th>Activity</th>
   <th>Date Created</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $activity)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $activity->activity }}</td>
    <td>{{ $activity->created_at}}</td>
    <td>
       <a class="btn btn-margin btn-success" href="{{ route('o_activity.edit',$activity) }}">Edit</a>

       <form action="{{ route('o_activity.destroy', $activity->id) }}" type="submit" method='post' >
             @csrf
             @method('delete')
           <button  type="submit" class="btn btn-danger ">Delete</button>
         </form>
    </td>
  </tr>
 @endforeach
</table>

{!! $data->render() !!}

@endsection
