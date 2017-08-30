<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IssueReceive extends Model
{
    protected $fillable = ['book_id', 'issued_to'];

    public static function issuedBooks(){
        return static::where('received_at', null)->get();
    }
    
}
