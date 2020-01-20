@extends('layouts.logins')

@section('title', 'Login')

@section('content')
<div class="login100-form validate-form">
    <span class="login100-form-title">
        Login
    </span>
    
    <form method="POST" action="/login">
    @csrf
    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <input class="input100" type="text" name="email" placeholder="Email" @error('email') is-invalid @enderror" required >
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
        <input class="input100" type="password" name="password" placeholder="Password" @error('password') is-invalid @enderror" name="password" required>
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

    <div class="row m-b-10">
        <div class="col-sm-5">
            <span class="txt1">
            <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">Remember Me</label>
            </span>
        </div>
        <div class="col-sm-7 text-right">
            <a class="txt2" href="#">
                Forgot your Password ?
            </a>
        </div>
    </div>

        <button class="login100-form-btn" type="submit">
            Sign In 
        </button>

    <div class="text-center p-t-12">
        <span class="txt1">
            or with your social media
        </span>
    </div>

    <div class="social-media text-center">
        <img src="{{asset('assets/login-template\facebook.png')}}" alt="IMG">
        <img src="{{asset('assets/login-template\google.png')}}" alt="IMG">
    </div>

    <div class="text-center p-t-50">
        <a class="txt2" href="{{route('signup') }}">
            Create your Account
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
        </a>
    </div>
    </form>
</div>
@endsection