<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    protected $primaryKey = 'cod_sale';


    public function usuarios()
    {

        return $this -> belongsTo('App\usuario','id_user');
    }

    public function clients()
    {

        return $this -> belongsTo('App\client','ci_client');
    }

    public function reservations()
    {

        return $this -> belongsTo('App\reservation','cod_reservation');
    }

    public function sale_products()
    {
        return $this -> hasMany('App\saleProduct');
    }
}


