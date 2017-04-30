<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $primaryKey = 'cod_prod';


    public function categories()
    {
        return $this -> belongsTo('App\category','cod_cat');
    }


    public function drinktypes()
    {
        return $this -> belongsTo('App\drinktype','cot_dt');
    }

    public function sale_products()
    {

        return $this -> hasMany('App\saleProduct');
    }

    public function warehouses()
    {

        return $this -> hasMany('App\warehouse');
    }

    public function purchases()
    {

        return $this -> hasMany('App\purchase');
    }
}
