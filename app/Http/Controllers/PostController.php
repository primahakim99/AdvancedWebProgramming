<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('week_3\home', [
            "ro1" => Post::find(1),
            "ro2" => Post::find(2),
            "ro3" => Post::find(3),
            "ro4" => Post::find(4),
            "bs1" => Post::find(5),
            "bs2" => Post::find(6),
            "bs3" => Post::find(7),
            "b1" => Post::find(8),
            "b2" => Post::find(9),
            "RO" => Post::where('category', 'resort-overview')->get(),
            "title" => "home"
        ]);
    }

    public function ro1()
    {
        return view ('week_4.ro1', [
            "title" => "home"
        ]);
    }

    public function ro2()
    {
        return view ('week_4.ro2', [
            "title" => "home"
        ]);
    }

    public function ro3()
    {
        return view ('week_4.ro3', [
            "title" => "home"
        ]);
    }

    public function ro4()
    {
        return view ('week_4.ro4', [
            "title" => "home"
        ]);
    }
}
