<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class billPurchase extends Model
{
    //
    protected $primaryKey = 'cod_facturaC';

    public function purchases()
    {
        return $this -> belongsTo('App\purchase','cod_com');
    }

}
