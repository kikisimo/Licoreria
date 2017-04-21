<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class warehouse extends Model
{
    //
    protected $primaryKey = 'cod_almacen';
    protected $foreignKey = 'cod_prod';
}
