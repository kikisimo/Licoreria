<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class saleProduct extends Model
{
    protected $primaryKey = 'cod_sale_product';

    public function sales()
    {
        return $this -> belongsTo('App\sale','cod_sale');
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
