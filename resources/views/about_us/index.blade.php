@extends('layouts.main')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Our Values</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('/home') }}"> Back</a>
        </div>

        @auth
        <div class="pull-right">
            <a class="btn btn-margin btn-success" href="{{ route('about_us.edit', $data->id) }}">Edit</a>
        </div>
        @endauth

    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<div class="card card-margin">
  <div class="card-header">
    <h4>Vision</h4>
  </div>
  <div class="card-body">
      <div class="col-sm-10">
        <div class="card">
          <div class="card-body">
    <p class="card-text">
      {{$data->vision}}
    </p>
    </div>
  </div>
  </div>
</div>
</div>

<div class="card card-margin">
  <div class="card-header">
    <h4>Mission</h4>
  </div>
  <div class="card-body">
      <div class="col-sm-10">
        <div class="card">
          <div class="card-body">
    <p class="card-text">
      {{$data->mission}}
    </p>
    </div>
  </div>
  </div>
</div>
</div>

@endsection
