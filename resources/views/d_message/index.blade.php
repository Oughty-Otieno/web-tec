@extends('layouts.main')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Director Messages</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('/home') }}"> Back</a>
        </div>

        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('d_message.create') }}">Create a new message</a>
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
   <th>Meessage</th>
   <th>Date Created</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $message)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $message->message }}</td>
    <td>{{ $message->created_at}}</td>
    <td>
       <a class="btn btn-info" href="{{ route('d_message.show',$message) }}">Show</a>
       <a class="btn btn-primary" href="{{ route('d_message.edit',$message) }}">Edit</a>

    </td>
  </tr>
 @endforeach
</table>

{!! $data->render() !!}

@endsection
