@extends('layouts.auth')

@section('content')
<div class="container">
  <div class="card card-login mx-auto mt-5">
      <div class="card-header">{{ __('Reset Password') }}</div>

      <div class="card-body">
        <div class="text-center mt-4 mb-5">
          <h4>Forgot your password?</h4>
          <p>Enter your email address and we will send you instructions on how to reset your password.</p>
        </div>

        @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
          @csrf

          <div class="form-group">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter email address" required>

            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">
              {{ __('Send Password Reset Link') }}
            </button>
          </div>
        </form>
      </div>
  </div>
</div>
@endsection
