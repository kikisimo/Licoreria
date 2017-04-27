<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    protected $primaryKey = 'cod_venta';


    public function usuarios()
    {

        return $this -> belongsTo('App\usuario','id_usuario');
    }

    public function clients()
    {

        return $this -> belongsTo('App\client','ci_cliente');
    }

    public function reservations()
    {

        return $this -> belongsTo('App\reservation','cod_reserva');
    }

    public function sale_products()
    {
        return $this -> hasMany('App\saleProduct');
    }
}


