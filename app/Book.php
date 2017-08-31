<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['book_id', 'name', 'type', 'synopsis', 'bengali_name'];

    public function issues(){
        return $this->hasMany('App\IssueReceive', 'book_id', 'book_id');
    }

    public function availability(){
        if($this->issues()->latest()->first()->received_at == null){
            return "Issued";
        }
        return "Available";
    }
}
