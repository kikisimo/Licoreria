<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{


    protected $primaryKey = 'cod_reserva';

    public function sales()
    {

        return $this -> belongsTo('App\sale');
    }
}
