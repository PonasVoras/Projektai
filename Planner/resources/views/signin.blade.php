@extends('layout')

@section('content')
    <div class="animation">
        <h1>
            Hello there
        </h1>
    </div>
    <form action="/menu" method="post">
    @csrf

    <div class="form-group">
        <label for="username" class="form-control">USERNAME</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
        <input type="email" class="form-control" name="email">
    </div>

    <div class="form-group">
        <label for="password" class="password">PASSWORD</label>
        <input type="password" class="form-control" name="password">
    </div>

    <div class="form-group">
        <button type="submit" class="tealbutton">Sign In</button>
    </div>

    <div class="form-group">
        <p> Dont have an account <a href="/signUp">SIGN UP</a></p>
    </div>

    </form>
@endsection
