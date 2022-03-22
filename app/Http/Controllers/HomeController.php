<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    Public function index()
    {
        $user = Auth::user();
        return view('home', ['user' => $user]);
    }
}
