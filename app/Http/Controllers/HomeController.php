<?php

namespace App\Http\Controllers;

use App\Post;

class HomeController extends Controller
{
    public function welcome()
    {
        $posts = Post::with('album')->orderBy('created_at', 'desc')->get();
        return view('home.welcome', compact('posts'));
    }
}
