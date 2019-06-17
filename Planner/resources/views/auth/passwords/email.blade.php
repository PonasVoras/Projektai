@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <div class="group">
                            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label for="email" >EMAIL</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group ">

                                <button action='/home' type="submit" class="tealbutton">
                                    {{ __('Send Password Reset Link') }}
                                </button>

                                <button onclick="location.href='/home'"  type="submit" class="tealbutton">
                                    {{ __('Back home') }}
                                </button>

                        </div>
                    </form>

            </div>
        </div>
    </div>
</div>
@endsection
