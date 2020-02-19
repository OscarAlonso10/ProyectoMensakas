<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
	protected $table = 'language';
	protected $primaryKey = 'idlanguage';


	 public function products()
    {
        return $this->hasMany('App\Product');
    } 
    public function product_categories()
    {
        return $this->hasMany('App\Product_Category');
    }
    public function business_categories()
    {
        return $this->hasMany('App\Business_Category');
    } 
}
