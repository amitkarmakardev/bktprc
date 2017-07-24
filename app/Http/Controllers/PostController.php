<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostCreationRequest;
use App\Album;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('post.index', compact('posts'));
    }

    public function create(){
        $albums = Album::all();
        return view('post.create', compact('albums'));
    }

    public function save(PostCreationRequest $request){
        Post::create($request->all());
        return redirect()->to(url('post'));
    }
}
