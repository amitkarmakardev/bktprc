<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['name','description'];
    
    public function photos(){
        return $this->hasMany('App\Photo', 'album_id', 'id');
    }

    public function firstPhoto()
    {
        if(count($this->photos) > 0){
            return $this->photos()->first()->filename;
        }
    }
}