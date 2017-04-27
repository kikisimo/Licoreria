<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class billIssue extends Model
{
    protected $primaryKey = 'cod_EFV';

    public function bill_sales()
    {
        return $this -> belongsTo('App\billSale','cod_facturaV');
    }
}
