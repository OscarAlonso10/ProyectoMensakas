<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $table = 'business';
    protected $primaryKey = 'idBusiness';

    protected $fillable = [
        'name','location', 'adress', 'email','number','zipcode',
    ];

    public function scopeBuscarpor($query, $tipo, $buscar) {
        if ( ($tipo) && ($buscar) ) {
            return $query->where($tipo,'like',"%$buscar%");
        }
    }


	public function packs()
    {
        return $this->hasMany('App\Pack');
    }
    public function products()
    {
        return $this->hasMany('App\Product');
    }
    public function business_categories()
    {
        return $this->hasMany('App\Business_Category');
    }  
}
