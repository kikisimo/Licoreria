<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    //
    protected $primaryKey = 'cod_com';

    public function products()
    {
        return $this -> hasMany('App\product','cod_prod');
    }


    public function providers()
    {
        return $this -> hasMany('App\provider','cod_prov');
    }

    public function bill_purchases()
    {

        return $this -> belongsTo('App\billPurchase');
    }

}
