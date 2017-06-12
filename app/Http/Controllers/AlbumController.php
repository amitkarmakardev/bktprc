<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlbumController extends Controller
{

    public function index(){
        $album_list = Album::with('photos')->get();
        return view('album.index', compact('album_list'));
    }
   
   public function create(){
       return view('album.create');
   }

   public function save(Request $request){
       Album::create($request->all());
       return redirect()->to(url('album'));
   }
}
