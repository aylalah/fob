<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TalentProfile extends Model
{
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
        'skill_rate_1',
        'skill_rate_2',
        'skill_rate_3',
        'status',
        'c_date',
        'c_time',
        'updated_by',
        'updated_at',
        'created_by',
    ];
}
