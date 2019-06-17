@extends('layout')

@section('content')

    <div class="userBadgeNameEmail">
        <div class="smallBadge">

        </div>
        <div class="userName">
            <h1>
                Paulius Sidlauskas
            </h1>
        </div>
        <div class="email">
            <p>
                debesysmelyni@gmail.com
            </p>
        </div>

    </div>
    <div class="menu">
        <a class="menuText" href="/home">Home</a>
        <a href="/home/create" class="menuText">Add New</a>
        <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 {{ csrf_field() }}
                </form>
    </div>

@endsection
