<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class warehouse extends Model
{
    //
    protected $primaryKey = 'cod_almacen';
    public function products()
    {

        return $this -> belongsTo('App\product','cod_prod');
    }

    public function status()
    {

        return $this -> hasMany('App\status');
    }
}
