<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class liquor_store extends Model
{
    protected $primaryKey = 'cod_lico';

    public function bill_sales()
    {

        return $this -> hasMany('App\billSale');
    }
}
