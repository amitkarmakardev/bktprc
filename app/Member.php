<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['member_id', 'name', 'associated_to', 'type', 'relation'];

    public function associatedTo(){
        return $this->belongsTo('App\Member', 'associated_to', 'member_id');
    }
}
