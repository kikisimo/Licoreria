<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class billSale extends Model
{
    protected $primaryKey = 'cod_facturaV';

    public function liquor_stores()
    {
        return $this -> hasMany('App\liquor_store','cod_lico');
    }

    public function sale_products()
    {
        return $this -> hasMany('App\saleProduct','cod_VP');
    }

    public function bill_issues()
    {

        return $this -> belongsTo('App\billIssue');
    }
}
