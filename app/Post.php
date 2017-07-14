<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'album_id'];

    public function album(){
        return $this->hasOne('App\Album', 'id', 'album_id');
    }
}
