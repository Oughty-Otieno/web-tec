@extends('layouts.main')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Apply Now</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('/home') }}"> Back</a>
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

  <form  method="post" action="{{ route('applications.store') }}" >
           @csrf
           <div class="form-group mb-2">
               <label>Name</label>
               <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"> </input>
           </div>

           <div class="form-group mb-2">
               <label>email</label>
               <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"> </input>
           </div>

           <div class="form-group mb-2">
               <label>Level</label>
               <select name="level" id="level">
                 <option value="#">--select--</option>
                 <option value="postgraduate">Postgraduate</option>
                 <option value="undergraduate">Undergraduate</option>
                 <option value="diploma">Diploma</option>
               </select>
           </div>

           <div class="form-group mb-2">
               <label>Programme</label>
               <input type="text" class="form-control @error('course') is-invalid @enderror" name="course" id="activity"> </input>
           </div>

             <input type="submit" class="btn btn-primary">

       </form>

@endsection
