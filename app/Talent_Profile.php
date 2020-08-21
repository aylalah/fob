<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talent_Profile extends Model
{
    //
     protected $fillable = [
        'user_id',
        'talent_category_id',
        'talent_subcategory_id',
        'instagram',
        'twitter',
        'facebook',
        'age',
        'date_of_birth',
        'sex',
        'location',
        'signed_date',
        'about',
        'experience',
        'degree',
        'talent_level',
        'website',
        'images',
        'video',
        'audio',
        'rate_1',
        'rate_2',
        'rate_3',
        'skill_1',
        'skill_2',
        'skill_3',
        'reason_1',
        'reason_2',
        'reason_3',
        'status',
        'c_date',
        'c_time',
        'updated_by',
        'updated_at',
        'created_by',
    ];
}
