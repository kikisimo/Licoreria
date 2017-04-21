<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class billIssue extends Model
{
    protected $primaryKey = 'cod_EFV';

    public function bill_sales()
    {
        return $this -> hasMany('App\billSale','cod_facturaV');
    }
}
