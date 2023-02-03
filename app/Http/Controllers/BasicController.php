<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    function index()
    {
        return view("home");
    }

    function about()
    {
        return view('about');
    }
}
