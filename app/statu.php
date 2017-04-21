<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class statu extends Model
{
    //
    protected $primaryKey = 'cot_status';
    protected $foreignKey = 'cod_almacen';
}
