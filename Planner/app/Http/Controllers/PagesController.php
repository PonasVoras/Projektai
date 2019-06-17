<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class PagesController extends Controller
{
    public function signup(){
        return view('signup');
    }

    public function signin(){
        return view('signin');
    }

    public function menu(){
        return view('menu');
    }

}
