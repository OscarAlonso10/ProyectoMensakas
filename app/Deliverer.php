<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deliverer extends Model
{
    protected $table = 'deliverer';
    protected $primaryKey = 'idDeliverer';

    protected $fillable = [
        'first_name','last_name', 'email','phone',
    ];

    public function scopeBuscarpor($query, $tipo, $buscar) {
        if ( ($tipo) && ($buscar) ) {
            return $query->where($tipo,'like',"%$buscar%");
        }
    }
}
