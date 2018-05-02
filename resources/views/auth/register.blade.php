@extends('layouts.auth')

@section('content')

<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Register an Account</div>
    <div class="card-body">
      <form method="POST" action="{{ route('register') }}">
          @csrf
        <div class="form-group">
          <label for="name">First name</label>
          <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>

          @if ($errors->has('name'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

          @if ($errors->has('email'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <label for="password">Password</label>
              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

              @if ($errors->has('password'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>
            <div class="col-md-6">
              <label for="password-confirm">Confirm password</label>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
          </div>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">
              {{ __('Register') }}
          </button>
        </div>
      </form>
      <div class="text-center">
        <a class="d-block small mt-3" href="{{ route('login') }}">Login Page</a>
        <a class="d-block small" href="{{ route('password.request')}}">Forgot Password?</a>
      </div>
    </div>
  </div>
</div>

@endsection
