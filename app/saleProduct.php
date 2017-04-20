<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class saleProduct extends Model
{
    protected $primaryKey = 'cod_VP';
    protected $foreignKey = 'cod_venta';
    protected $foreignKey2 = 'cod_prod';
}
