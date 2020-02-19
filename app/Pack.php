<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    protected $table = 'pack';
    protected $primaryKey = 'idPack';
    protected $fillable = [
        'name','description', 'state', 'price','fk_business_id'
    ];

    public function scopeBuscarpor($query, $tipo, $buscar) {
        if ( ($tipo) && ($buscar) ) {
            return $query->where($tipo,'like',"%$buscar%");
        }
    }

     public function business()
    {
        return $this->belongsTo('App\Business','fk_business_id');
    }
}
