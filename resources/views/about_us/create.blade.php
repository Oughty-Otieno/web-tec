@extends('layouts.main')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create Programme</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-margin btn-primary" href="{{ url('/home') }}"> Back</a>
        </div>
    </div>
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif

  <form  method="post" action="{{ route('about_us.store') }}">
           @csrf
           <div class="form-group mb-2">
               <label>Vision</label>
               <input type="text" class="form-control @error('name') is-invalid @enderror" name="vision" id="activity"> </input>
           </div>

           <div class="form-group mb-2">
               <label>Mission</label>
               <textarea class="form-control @error('description') is-invalid @enderror" name="mission"> </textarea>
           </div>
             <input type="submit" class="btn btn-primary">

       </form>

@endsection
