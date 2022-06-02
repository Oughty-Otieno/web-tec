@extends('layouts.main')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Programmes</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary btn-margin" href="{{ url('/home') }}"> Back</a>
        </div>

        @auth
        <div class="pull-right">
            <a class="btn btn-margin btn-success" href="{{ route('programs.create') }}">Create new Programme</a>
        </div>
        @endauth

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
   @auth
   <th width="280px">Action</th>
   @endauth
 </tr>
 @foreach ($data_postgraduate as $key => $program)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $program->name }}</td>
    <td>{{ $program->requirements}}</td>
    @auth
    <td>
       <a class="btn btn-margin btn-success" href="{{ route('programs.edit',$program->id) }}">Edit</a>

       <form action="{{ route('programs.destroy', $program->id) }}" type="submit" method='post' >
             @csrf
             @method('delete')
           <button  type="submit" class="btn btn-danger ">Delete</button>
         </form>
    @endauth
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
   @auth
   <th width="280px">Action</th>
   @endauth
 </tr>
 @foreach ($data_undergraduate as $key => $program)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $program->name }}</td>
    <td>{{ $program->requirements}}</td>
    @auth
    <td>
       <a class="btn btn-margin btn-success" href="{{ route('programs.edit',$program) }}">Edit</a>

       <form action="{{ route('programs.destroy', $program->id) }}" type="submit" method='post' >
             @csrf
             @method('delete')
           <button  type="submit" class="btn btn-danger ">Delete</button>
         </form>
    @endauth
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
   @auth
   <th width="280px">Action</th>
   @endauth
 </tr>
 @foreach ($data_diploma as $key => $program)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $program->name }}</td>
    <td>{{ $program->requirements}}</td>
    @auth
    <td>
       <a class="btn btn-margin btn-success" href="{{ route('programs.edit',$program) }}">Edit</a>

       <form action="{{ route('programs.destroy', $program->id) }}" type="submit" method='post' >
             @csrf
             @method('delete')
           <button  type="submit" class="btn btn-danger ">Delete</button>
         </form>
    </td>
    @endauth
  </tr>
 @endforeach
</table>


{!! $data_postgraduate->render() !!}

@endsection
