@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row header">
        <div class="col-3">
            <div class="cancel float-left">
                <a href="/home"><img src="/images/icon-close.png" class="iconclose" height="25" width="25"></a>
            </div>
        </div>
        <div class="col-6">
            Sign Up
        </div>
        <div class="col-3">

        </div>
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row"></div>
            <a href="#">
                <img class="userbadge" src="/images/dog.jpg" alt="Doggy" width="100%" height="35%">
                <span class="badgee">+</span>
            </a>
        <div class="group">
            <input type="text" class=" @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label for="name" >FULL NAME</label>
            @error('name')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="group">
            <input type="email" class="@error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label for="email" >EMAIL</label>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="group">
            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label for="email" >PASSWORD</label>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="group">
            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label for="confirmpassword" >CONFIRM PASSWORD</label>
        </div>

        <div class="group">
            <div class="group">
                <input type="date" name="birthday">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label for="birthday" >BIRTHDAY</label>
            </div>
        </div>

        <div class="group row mb-0">
            <button type="submit" class="tealbutton">
                {{ __('Sign Up') }}
            </button>
        </div>

        <div class="row authbottomtext text-center">
            <div class="col">
                <p> ALREADY HAVE AN ACCOUNT ? <a href="/login">SIGN IN</a></p>
            </div>
        </div>

    </form>
</div>
@endsection
