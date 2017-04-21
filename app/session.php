<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class session extends Model
{
    protected $primaryKey = 'cod_sesion';

    public function usuarios()
    {

        return $this -> hasMany('App\usuario','id_usuario');
    }
}
