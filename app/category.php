<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $primaryKey = 'cod_cat';

    public function products()
    {

        return $this -> hasMany('App\product');
    }

}
