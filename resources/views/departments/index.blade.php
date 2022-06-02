@extends('layouts.main')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Departments</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('/home') }}"> Back</a>
        </div>

        @auth
        <div class="pull-right">
            <a class="btn btn-margin btn-success" href="{{ route('departments.create') }}">Create a Department</a>
        </div>
        @endauth

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
      @auth
      <a class="btn btn-margin btn-success" href="{{ route('departments.edit',$department->id) }}">Edit</a>

      <form action="{{ route('departments.destroy', $department->id) }}" type="submit" method='post' >
            @csrf
            @method('delete')
          <button  type="submit" class="btn btn-danger ">Delete</button>
        </form>
      @endauth
  </div>
</div>
@endforeach



@endsection
