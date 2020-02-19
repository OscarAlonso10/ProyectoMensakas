<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumer extends Model
{
    protected $table = 'consumer';
    protected $primaryKey = 'idConsumer';

    protected $fillable = [
        'first_name','last_name', 'email', 'location','phone',
    ];

    public function scopeBuscarpor($query, $tipo, $buscar) {
        if ( ($tipo) && ($buscar) ) {
            return $query->where($tipo,'like',"%$buscar%");
        }
    }

}
