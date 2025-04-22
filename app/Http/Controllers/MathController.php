<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    function sum ($a, $b) {
        return $a + $b;
    }

    function subtract ($a, $b) {
        return $a - $b;
    }
}
