<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrivacyPolicy extends Model
{
    //
     protected $fillable = [
        'heading', 'content','status','type','created_by','updated_by'
    ];
}
