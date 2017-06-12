<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlbumController extends Controller
{

    public function index(){
        return view('album.index');
    }
   
   public function create(){
       return view('album.create');
   }

   public function save(Request $request){
       Album::create($request->all());
       return redirect()->to()
   }
}
