<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
     protected $fillable = [
        'image_name', 'image_type','status','subject','created_by','updated_by'
    ];
}
