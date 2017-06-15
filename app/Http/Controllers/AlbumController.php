<?php

namespace App\Http\Controllers;

use App\Album;
use App\Http\Requests\PhotoUploadRequest;
use App\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlbumController extends Controller
{

    public function index()
    {
        $album_list = Album::with('photos')->get();
        return view('album.index', compact('album_list'));
    }

    public function create()
    {
        return view('album.create');
    }

    public function save(Request $request)
    {
        Album::create($request->all());
        return redirect()->to(url('album'));
    }

    public function view($id)
    {
        $album = Album::find($id);
        return view('album.view', compact('album'));
    }

    public function showUploadForm($id)
    {
        $album = Album::find($id);
        return view('album.upload-form', compact('album'));
    }

    public function upload(PhotoUploadRequest $request)
    {
        foreach ($request->photos as $photo) {

            $filename = $photo->store('photos');
        }
        return 'Upload successful!';
    }
}
