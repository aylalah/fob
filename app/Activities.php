<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    //
     protected $fillable = [
        'category_id', 'tittle','status','content','title_type','image','created_by','updated_by'
    ];
}
