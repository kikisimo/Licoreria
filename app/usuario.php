<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $primaryKey = 'id_usuario';


    public function people()
    {

        return $this -> belongsTo('App\person','ci_persona');
    }

    public function privileges()
    {

        return $this -> belongsTo('App\privilege','cod_privilegio');
    }

    public function sessions()
    {
        return $this -> hasMany('App\session');
    }

    public function sales()
    {
        return $this -> hasMany('App\sale');
    }
}
