<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
     protected $fillable = [
        'team_name', 'designation','status','role_id','image','created_by','updated_by'
    ];
}
