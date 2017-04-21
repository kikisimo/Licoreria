<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    protected $primaryKey = 'cod_venta';
    protected $foreignKey = 'id_usuario';
    protected $foreignKey2 = 'ci_cliente';
    protected $foreignKey3 = 'cod reserva';
}

