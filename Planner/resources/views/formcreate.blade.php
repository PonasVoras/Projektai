@extends('layout')

@section('header')
    <div class="header">
        <div class="headerLeft cancelBtn">
            <button onclick="location.href='/home'" class="btn">X</button>
        </div>

        <div class="headerCenter headerTextComponent">
            <h1 class="headertext">
                Add New
            </h1>
        </div>

        <div class="headerRight addBtn">
                <button class="btn">OK</button>
            </div>
        </div>
@endsection

@section('content')

    <form action="/home" method="POST" class="form">
        {{ csrf_field() }}
                <div class="titleDescription">
                    <div class="form-group">
                        <label for="title" class="form-control">TITLE</label>
                        <input type="text" class="form-control" name="title" value='{{ old('title') }}'>
                    </div>

                    <div class="form-group">
                        <label for="description" class="form-control">DESCRIPTION</label>
                        <input type="text" class="form-control" name="description" value='{{ old('description') }}'>
                    </div>
                </div>

                <div class="form-group">
                    <label for="text" class="form-control">DATE</label>
                    <input type="date" class="form-control" name="date" value='{{ old('date') }}'>
                </div>

                <div class="form-group">
                <label for="from" class="form-control">FROM</label>
                    <input type="text" class="form-control" name="from" value='{{ old('from') }}'>
                </div>

                <div class="form-group">
                    <label for="to" class="form-control">TO</label>
                    <input type="text" class="form-control" name="to" value='{{ old('to') }}'>
                </div>

                <div class="form-group">
                    <label for="location" class="form-control">LOCATION</label>
                    <input type="text" class="form-control" name="location" value='{{ old('location') }}'>
                </div>

                <div class="form-group">
                    <label for="notify" class="form-control">NOTIFY</label>
                    <select name="notify" class="form-control" value='{{ old('value') }}'>
                        <option value=0>20 minutes</option>
                        <option value=1>40 minutes</option>
                        <option value=2>1 hour</option>
                        <option value=3>1 day before</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="label" class="form-control">LABEL</label>
                    <input type="text" class="form-control" name="label" value='{{ old('label') }}'>
                </div>

                <input type="hidden" id="custId" name="owner_id" value="{{ Auth::user()->id }}">

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">CHECK</button>
                </div>

                @if ($errors->any())
                    <div class="notification">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
    </form>


@endsection
