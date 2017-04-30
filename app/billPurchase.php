<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class billPurchase extends Model
{
    //
    protected $primaryKey = 'cod_bill_purchase';

    public function purchases()
    {
        return $this -> belongsTo('App\purchase','cod_purchase');
    }

}
