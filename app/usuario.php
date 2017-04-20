<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $primaryKey = 'id_usuario';
    protected $foreignKey = 'ci_persona';
    protected $foreignKey2 = 'cod_privilegio';

}
