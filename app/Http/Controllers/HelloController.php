<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{


    function welcome()
    {
        return view('hello.welcome', ["name" => 'Shakhawat', "age" => 30, "hobbies" => ['cricket', 'football', 'badminton']]);
    }
}
