@extends('layouts.logins')

@section('title', 'Register')

@section('content')
<div class="login100-form validate-form">
    <span class="login100-form-title">
        Register
    </span>
    
    <form method="POST" action="{{ route('register') }}">
        @csrf
    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <input class="input100" type="text" placeholder="Username" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-user" aria-hidden="true"></i>
        </span>
    </div>
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <input class="input100" type="text" name="email" placeholder="Email"@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-envelope" aria-hidden="true"></i>
        </span>
    </div>
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <div class="wrap-input100 validate-input" data-validate = "Password is required">
        <span class="btn-show-pass">
            <i class="fa fa-eye"></i>
        </span>
        <input class="input100" type="password" placeholder="Password"@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-lock" aria-hidden="true"></i>
        </span>
    </div>
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <div class="wrap-input100 validate-input" data-validate = "Password is required">
        <span class="btn-show-pass">
            <i class="fa fa-eye"></i>
        </span>
        <input class="input100" type="password" placeholder="Re-Password" type="password" name="password_confirmation" required autocomplete="new-password">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-lock" aria-hidden="true"></i>
        </span>
    </div>
    
    <div class="container-login100-form-btn">
        <button class="login100-form-btn" type="submit">
            Sign Up
        </button>
    </div>

    <div class="text-center p-t-12">
        <span class="txt1">
            or with your social media
        </span>
    </div>

    <div class="social-media text-center">
        <img src="{{asset('assets/login-template\facebook.png')}}" alt="IMG">
        <img src="{{asset('assets/login-template\google.png')}}" alt="IMG">
    </div>

    <div class="text-center p-t-30">
        <a class="txt2" href="{{route('signin') }}">
            Already have an account? <b>Sign In</b>
            <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
        </a>
    </div>
</form>
</div>
@endsection