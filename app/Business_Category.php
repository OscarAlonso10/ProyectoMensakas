<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business_Category extends Model
{
    protected $table = 'business_Category';
    protected $primaryKey = 'idBusiness_Category';
    protected $fillable = [
        'name'
    ];
}
