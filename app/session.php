<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class session extends Model
{
    protected $primaryKey = 'cod_sesion';
    protected $foreignKey = 'id_usuario';
}
