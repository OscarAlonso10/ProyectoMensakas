<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'idProduct';
    protected $fillable = [
        'name','description', 'state', 'price','type','fk_business_id','fk_language_id'
    ];

     public function business(){
        return $this->belongsTo('App\Business','fk_business_id');
    }

    public function languages(){
        return $this->belongsTo('App\Language','fk_language_id');
    }

    public function product_categories()
    {
        return $this->hasMany('App\Product_Category');
    } 
}
