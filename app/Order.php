<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'idOrder';

    protected $fillable = [
        'name','status', 'json'
    ];
}

