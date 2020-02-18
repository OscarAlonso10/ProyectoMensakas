<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Category extends Model
{
    protected $table = 'product_Category';
    protected $primaryKey = 'idProduct_Category';
    protected $fillable = [
        'name'
    ];
}
