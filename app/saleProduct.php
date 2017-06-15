<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Tests\ClientTest;

class saleProduct extends Model
{
    protected $primaryKey = 'cod_sale_product';

    protected $fillable = [
        'quantity', 'codigof','tax','discount','total','ci_client', 'cod_prod'
        ,
    ];


    public function clients()
    {
        return $this -> belongsTo(Client::class, 'ci_client');
    }


    /*public function sales()
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
    }*/
}
