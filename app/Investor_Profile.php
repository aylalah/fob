<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investor_Profile extends Model
{
     protected $fillable = [
        'user_id',
        'ceo_name',
        'company_name',
        'company_industry_category',
        'company_profile',
        'facebook',
        'instagram',
        'twitter',
        'website',
        'image',
        'logo',
        'status',
        'c_date',
        'c_time',
        'updated_by',
        'updated_at',
        'created_by',
    ];
}
