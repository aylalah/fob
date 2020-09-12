<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aboutus extends Model
{
    //
     protected $fillable = [
        'heading', 'content','status','video','image','created_by','updated_by'
    ];
}
