@extends('layout')

@section('header')
    <div class="header">
        <div class="cancelBtn">
            <button class="btn">X</button>
        </div>

        <div class="headerTextComponent">
            <h1 class="headertext">
                Sign up
            </h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="userBadge">
        <h1>
            Hello there
        </h1>
    </div>

    <form action="/menu" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="fullname" class="form-control">FULL NAME</label>
            <input type="text" class="form-control" name="fullname">
        </div>

        <div class="form-group">
            <label for="username" class="form-control">EMAIL</label>
            <input type="email" class="form-control" name="email">
        </div>

        <div class="form-group">
            <label for="password" class="password">PASSWORD</label>
            <input type="password" class="form-control" name="password">
        </div>

        <div class="form-group">
                <label for="fullname" class="form-control">BIRTHDAY</label>
                <input type="date" class="form-control" name="birthday">
            </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>

        <div class="form-group">
            <p>Already have an account<a href="/signIn">SIGN IN</a></p>
        </div>

    </form>
@endsection
