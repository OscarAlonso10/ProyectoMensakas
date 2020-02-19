<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business_Category extends Model
{
    protected $table = 'business_Category';
    protected $primaryKey = 'idBusiness_Category';
    protected $fillable = [
        'name','fk_business_id','fk_language_id'
    ];

    public function business(){
        return $this->belongsTo('App\Business','fk_business_id');
    }
    public function languages(){
        return $this->belongsTo('App\Language','fk_language_id');
    }
}
