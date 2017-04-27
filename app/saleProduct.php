<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class saleProduct extends Model
{
    protected $primaryKey = 'cod_VP';

    public function sales()
    {
        return $this -> belongsTo('App\sale','cod_venta');
    }

    public function products()
    {
        return $this -> belongsTo('App\product','cod_prod');
    }

    public function bill_sales()
    {

        return $this -> hasMany('App\billSale');
    }
}
