@extends('layouts.logins')

@section('title', 'Login')

@section('content')
<div class="login100-form validate-form">
    <span class="login100-form-title">
        Login
    </span>
    
    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <input class="input100" type="text" name="email" placeholder="Email">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-envelope" aria-hidden="true"></i>
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

    <div class="row">
        <div class="col-sm-5">
            <span class="txt1">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
            </span>
        </div>
        <div class="col-sm-7 text-right">
            <a class="txt2" href="#">
                Forgot your Password ?
            </a>
        </div>
    </div>

    <a class="container-login100-form-btn" href="{{route('dashboard') }}">
        <button class="login100-form-btn">
            Sign In 
        </button>
    </a>

    
    
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
</div>
@endsection