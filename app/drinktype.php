<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class drinktype extends Model
{
    protected $primaryKey = 'cod_dt';

    public function products()
    {

        return $this -> hasMany('App\product');
    }
}
