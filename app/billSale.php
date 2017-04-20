<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class billSale extends Model
{
    protected $primaryKey = 'cod_facturaV';
    protected $foreignKey = 'cod_facturaV';
    protected $foreignKey2 = 'cod_VP';
}
