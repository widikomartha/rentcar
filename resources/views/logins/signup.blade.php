@extends('layouts.logins')

@section('title', 'Register')

@section('content')
<div class="login100-form validate-form">
    <span class="login100-form-title">
        Register
    </span>
    
    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <input class="input100" type="text" name="email" placeholder="Username">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-user" aria-hidden="true"></i>
        </span>
    </div>
    
    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <input class="input100" type="text" name="email" placeholder="Email">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-envelope" aria-hidden="true"></i>
        </span>
    </div>

    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <input class="input100" type="text" name="email" placeholder="Number Phone">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-phone" aria-hidden="true"></i>
        </span>
    </div>

    <div class="wrap-input100 validate-input" data-validate = "Password is required">
        <span class="btn-show-pass">
            <i class="fa fa-eye"></i>
        </span>
        <input class="input100" type="password" name="pass" placeholder="Password">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-lock" aria-hidden="true"></i>
        </span>
    </div>

    <div class="wrap-input100 validate-input" data-validate = "Password is required">
        <span class="btn-show-pass">
            <i class="fa fa-eye"></i>
        </span>
        <input class="input100" type="password" name="pass" placeholder="Re-Password">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-lock" aria-hidden="true"></i>
        </span>
    </div>
    
    <div class="container-login100-form-btn">
        <button class="login100-form-btn">
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
</div>
@endsection