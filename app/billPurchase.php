<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class billPurchase extends Model
{
    //
    protected $primaryKey = 'cod_facturaC';
    protected $foreignKey = 'cod_com';
}
