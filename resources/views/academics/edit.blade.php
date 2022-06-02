@extends('layouts.main')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Programme</h2>
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

<form method="post" action="{{route('academics.update', $academic->id)}}">
          @csrf
            @method('PUT')
           <div class="form-group mb-2">
             <label for="type">Choose type:</label>
             <select name="type" id="membership">
               <option value="#">--select--</option>
               <option value="bootcamp">Bootcamp</option>
               <option value="cisco">Cisco</option>
               <option value="hackathons">Hackathons</option>
             </select>
           </div>

           <div class="form-group mb-2">
               <label>Name</label>
               <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value = "{{$academic->name}}"> </input>
           </div>

           <div class="form-group mb-2">
               <label>Requirements</label>
               <input type="text" class="form-control @error('requirements') is-invalid @enderror" name="requirements" value = "{{$academic->requirements}}"> </input>
           </div>

           <div class="form-group mb-2">
               <label>Start date</label>
               <input type="text" class="form-control @error('dates') is-invalid @enderror" name="dates" value = "{{$academic->dates}}"> </input>
           </div>

             <input type="submit" class="btn btn-success">

       </form>

@endsection
