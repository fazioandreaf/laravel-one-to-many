<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerMain extends Controller
{
    function home(){
        return view('pages.home');
    }
}
