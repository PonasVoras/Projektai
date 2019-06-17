<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoCompleteController extends Controller
{
    public function update(Todo $todo){
        $todo->completed(request()->has('completed'));
        //encaptulation
        return back();
    }
}
