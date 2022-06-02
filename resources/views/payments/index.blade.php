@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Payment Methods</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('/home') }}"> Back</a>
        </div>
    </div>
</div>

<div class="card card-margin">
  <div class="card-header">
    <h4>KCB Bank</h4>
  </div>
  <div class="card-body">
      <div class="col-sm-10">
        <div class="card">
          <div class="card-body">
    <p class="card-text">
    Account: 1122223322332232 <br>
    Name: JKUAT <br>
    </p>
    </div>
  </div>
  </div>
</div>
</div>

<div class="card card-margin">
  <div class="card-header">
    <h4>Baclays Bank</h4>
  </div>
  <div class="card-body">
      <div class="col-sm-10">
        <div class="card">
          <div class="card-body">
    <p class="card-text">
      Account: 1122223322332232 <br>
      Name: JKUAT <br>
    </p>
    </div>
  </div>
  </div>
</div>
</div>

<div class="card card-margin">
  <div class="card-header">
    <h4>MPesa</h4>
  </div>
  <div class="card-body">
      <div class="col-sm-10">
        <div class="card">
          <div class="card-body">
    <p class="card-text">
      Account: 112222337732232 <br>
      Till: 26622233 <br>
    </p>
    </div>
  </div>
  </div>
</div>
</div>
@endsection
