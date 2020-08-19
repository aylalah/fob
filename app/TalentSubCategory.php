<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TalentSubCategory extends Model
{
    protected $fillable = [
        'subcategory_name',
        'subcategory_description',
        'status',
        'c_date',
        'c_time',
        'updated_by',
        'updated_at',
        'created_by',
    ];
}
