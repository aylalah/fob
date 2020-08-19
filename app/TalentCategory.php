<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TalentCategory extends Model
{
    protected $table= 'talent_category';
    protected $fillable = [
        'talentcategory_name',
        'talentcategory_description',
        'status',
        'c_date',
        'c_time',
        'updated_by',
        'updated_at',
        'created_by',
    ];
}
