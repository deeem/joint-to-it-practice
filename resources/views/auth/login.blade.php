@extends('layouts.auth')

@section('content')
<div class="container">
  <div class="card card-login mx-auto mt-5">
      <div class="card-header">{{ __('Login') }}</div>

      <div class="card-body">
          <form method="POST" action="{{ route('login') }}">
              @csrf

              <div class="form-group">
                  <label for="email">{{ __('E-Mail Address') }}</label>
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                  @if ($errors->has('email'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
              </div>

              <div class="form-group">
                  <label for="password">{{ __('Password') }}</label>
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                  @if ($errors->has('password'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>

              <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox"  class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                  </label>
                </div>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">
                    {{ __('Login') }}
                </button>
              </div>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="{{ route('register') }}">Register an Account</a>
            <a class="d-block small" href="{{ route('password.request') }}">Forgot Password?</a>
          </div>
      </div>
  </div>
</div>
@endsection
