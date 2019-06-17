@extends('layouts.app')

@section('content')
<div class="container text-center">

        <img src="/images/logo.png" alt="Doggy" width="100%" height="35%">
        <form method="POST" action="{{ route('login') }}">
                <div class="row">
            {{ csrf_field() }}
            <div class="group">
                <input type="email" class="@error('email') is-invalid @enderror" name="email" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label for="email" >USERNAME</label>
            </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

                <div class="row">
                    <div class="password col-6 float-left group">
                        <input type="password" class="@error('password') is-invalid @enderror" name='password' required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label for="password">PASSWORD</label>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="forgotPassword col-6 group ">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link float-right" href="{{ route('password.request') }}">
                        {{ __('Forgot Password') }}
                        </a>
                        @endif
                    </div>
                </div>
            <div class="row">
                    <button type="submit" class="tealbutton">
                        {{ __('Sign In') }}
                    </button>
            </div>

            <div class="row text-center authbottomtex">
                <div class="col">
                    <p> Dont have an account <a href="/register">SIGN UP</a></p>
                </div>
            </div>
        </form>
        </div>




    </div>
</div>
@endsection
