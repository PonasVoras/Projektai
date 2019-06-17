@extends('layout')
@section('content')
<div class="container text-center">
    <div class="header row">
        <div class="col-3">
            <div class="cancel float-left">
                <a href="/menu"><img src="/images/icon-menu.png" class="iconclose" height="25" width="25"></a>
            </div>
        </div>

    <div class="col-6">
        Home
    </div>

    <div class="col-3">
        <div class="cancel float-right">
            <a href="/home/create"><img src="/images/icon-plus.png" class="iconclose" height="25" width="25"></a>
        </div>
    </div>
</div>
</div>
<div class="text-center taskcontainer">
    <div class="home">
        <div class="tasks container">
            <ul style="list-style: none;">
            @foreach ($todos as $todo)
                <li>
                    <div class="scrollday">
                            <div class="taskdate">
                                {{ $todo->date }}
                            </div>
                        </div>
                        <div class="scrollitem container">
                            <div class="row">
                                <div class="col-9">
                                    <div class="row">
                                    <div class="todotitle">
                                        <p>{{ $todo->title }}</p>
                                    </div>
                                </div>
                                        <div class="row">
                                            <div class="col-4">
                                            <div class="todotime">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="todotimeicon">
                                                            <div class="cancel float-left">
                                                                <a href="/home"><img src="/images/icon-time.png" class="iconclose" height="15" width="15"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <p >
                                                            {{ $todo->from }} - {{ $todo->to }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="todolocation">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="todolocationicon">
                                                                <div class="cancel float-left">
                                                                        <a href="/home"><img src="/images/icon-location.png" class="iconclose" height="15" width="15"></a>
                                                                    </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-10">
                                                        <p class="float-left">{{ $todo->location }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="todoicon {{ $todo->completed ? 'is-complete' : '' }}">
                                        <form action="/todo/{{ $todo->id }}" class="checkbox text-center" for='completed' method="POST">
                                            @method('PATCH')
                                            {{ csrf_field() }}
                                            <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $todo->completed ? 'checked' : ''}}>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
