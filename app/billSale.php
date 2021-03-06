<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class billSale extends Model
{
    protected $primaryKey = 'cod_bill';

    public function liquor_stores()
    {
        return $this -> belongsTo('App\liquor_store','cod_lico');
    }

    public function sale_products()
    {
        return $this -> belongsTo('App\saleProduct','cod_sale_product');
    }

    public function bill_issues()
    {

        return $this -> hasMany('App\billIssue');
    }
}
