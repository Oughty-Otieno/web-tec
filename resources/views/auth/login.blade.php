<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel 8 User Roles and Permissions Tutorial') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<div class="row justify-content-center">
  <div class="col-md-4">
      <div class="card card-position-login">
          <div class="card-body">
              <form method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}
                  <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
                    <p>username: admin@jkuat.com <br>
                      password: admin@123</p>
                      <div class="col-md-12">
                          <input id="email" placeholder="email" type="email" class="form-control login-input" name="email" value="{{ old('email') }}" required autofocus>
                          @if ($errors->has('email'))
                              <span class="input-invalid-feedback">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                          @if ($errors->has('verified') && $errors->has('email') == false)
                              <span class="input-invalid-feedback">
                                  <strong>{{ $errors->first('verified') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
                      <div class="col-md-12">
                          <input id="password" placeholder="Password" type="password" class="form-control login-input" name="password" required>
                          @if ($errors->has('password'))
                              <span class="input-invalid-feedback">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row">
                      <div class="col-md-12 ml-auto">
                          <button type="submit" class="btn  btn-margin btn-success col-md-12 ml-auto">
                              Login
                          </button>
                      </div>
              </form>
          </div>
      </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>
