<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Category extends Model
{
    protected $table = 'product_Category';
    protected $primaryKey = 'idProduct_Category';
    protected $fillable = [
        'name','fk_product_id','fk_language_id'
    ];

    public function business(){
        return $this->belongsTo('App\Product','fk_product_id');
    }
    public function languages(){
        return $this->belongsTo('App\Language','fk_language_id');
    }
}
