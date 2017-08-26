<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['book_id', 'name', 'type', 'description', 'bengali_name'];
}
