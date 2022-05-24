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
            <a class="btn btn-success" href="{{ route('programs.create') }}">Create a new Programme</a>
        </div>


    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<h1> Postgraduate</h1>
<table class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Course Title</th>
   <th>Requirements</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data_postgraduate as $key => $program)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $program->name }}</td>
    <td>{{ $program->requirements}}</td>
    <td>
       <a class="btn btn-info" href="{{ route('programs.show',$program) }}">Show</a>
       <a class="btn btn-primary" href="{{ route('programs.edit',$program) }}">Edit</a>

    </td>
  </tr>
 @endforeach
</table>

<h1> Undergraduate</h1>
<table class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Course Title</th>
   <th>Requirements</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data_undergraduate as $key => $program)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $program->name }}</td>
    <td>{{ $program->requirements}}</td>
    <td>
       <a class="btn btn-info" href="{{ route('programs.show',$program) }}">Show</a>
       <a class="btn btn-primary" href="{{ route('programs.edit',$program) }}">Edit</a>

    </td>
  </tr>
 @endforeach
</table>

<h1>Diploma</h1>
<table class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Course Title</th>
   <th>Requirements</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data_diploma as $key => $program)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $program->name }}</td>
    <td>{{ $program->requirements}}</td>
    <td>
       <a class="btn btn-info" href="{{ route('programs.show',$program) }}">Show</a>
       <a class="btn btn-primary" href="{{ route('programs.edit',$program) }}">Edit</a>

    </td>
  </tr>
 @endforeach
</table>


{!! $data_postgraduate->render() !!}

@endsection
