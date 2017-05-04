<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class purchase extends Model
{
    //
    protected $primaryKey = 'cod_purchase';

    public function products()
    {
        return $this -> belongsTo('App\product','cod_prod');
    }


    public function providers()
    {
        return $this -> belongsTo('App\provider','cod_prov');
    }

    public function bill_purchases()
    {

        return $this -> hasMany('App\billPurchase');
    }

}
