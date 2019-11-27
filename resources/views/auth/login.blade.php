@extends('layouts.auth')
​
@section('title')
  <title>Login</title>
@endsection
​
@section('content')
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
​
      <form method="POST" action="{{ route('login') }}">
        @csrf
        @if (session('error'))
          @alert(['type' => 'danger'])
            {{ session('error') }}
          @endalert
        @endif
        <div class="form-group has-feedback">
          <input type="email" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}">
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }} "
              placeholder="{{ __('Password') }}">
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
          </div>
        </div>
      </form>
      
    </div>
  </div>
@endsection
