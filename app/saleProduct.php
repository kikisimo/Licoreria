<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class saleProduct extends Model
{
    protected $primaryKey = 'cod_VP';

    public function sales()
    {
        return $this -> hasMany('App\sale','cod_venta');
    }

    public function products()
    {
        return $this -> hasMany('App\product','cod_prod');
    }

    public function bill_sales()
    {

        return $this -> belongsTo('App\billSale');
    }
}
