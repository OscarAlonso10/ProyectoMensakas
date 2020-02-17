<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'idProduct';
    protected $fillable = [
        'name','description', 'state', 'price','type'
    ];
}
