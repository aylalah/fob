<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyCategory extends Model
{
    //
    protected $fillable = [
        'category_name',
        'category_description',
        'status',
        'c_date',
        'c_time',
        'updated_by',
        'updated_at',
        'created_by',
    ];
}
