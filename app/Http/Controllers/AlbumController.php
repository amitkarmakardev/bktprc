<?php

namespace App\Http\Controllers;

use App\Album;
use App\Http\Requests\PhotoUploadRequest;
use App\Photo;
use Illuminate\Http\Request;

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

    public function upload(PhotoUploadRequest $request)
    {
        $album_name = Album::find($request->get('album_id'))->name;
        foreach ($request->photos as $photo) {
            $filename = str_random(10) . '.' . $photo->extension();
            $photo->storeAs("public/{$album_name}", "{$filename}");
            Photo::create(['album_id' => $request->get('album_id'), 'filename' => $filename]);
        }
        return redirect()->back();
    }
}
