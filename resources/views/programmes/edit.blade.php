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

<form method="post" action="{{route('programs.update', $program->id)}}">
          @csrf
            @method('PUT')
           <div class="form-group mb-2">
               <label>Level</label>
               <select name="level" id="level">
                 <option value="{{$program->level}}">{{$program->level}}</option>
                 <option value="postgraduate">Postgraduate</option>
                 <option value="undergraduate">Undergraduate</option>
                 <option value="diploma">Diploma</option>
               </select>
           </div>

           <div class="form-group mb-2">
               <label>Programme</label>
               <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value = "{{$program->name}}"> </input>
           </div>

           <div class="form-group mb-2">
               <label>Requirements</label>
               <textarea class="form-control @error('name') is-invalid @enderror" name="requirements">{{$program->requirements}}</textarea>
           </div>

             <input type="submit" class="btn btn-primary">

       </form>

@endsection
