<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Task;
use Illuminate\Http\Request;

class ControllerMain extends Controller
{
    function home(){
        $employee=employee::all();

        return view('pages.home',compact('employee'));
    }
}
