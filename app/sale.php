<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    protected $primaryKey = 'cod_venta';

    public function usuarios()
    {

        return $this -> hasMany('App\usuario','id_usuario');
    }

    public function clients()
    {

        return $this -> hasMany('App\client','ci_cliente');
    }

    public function reservations()
    {

        return $this -> hasMany('App\reservation','cod_reserva');
    }
}

