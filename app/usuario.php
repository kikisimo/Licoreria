<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $primaryKey = 'id_usuario';


    public function people()
    {

        return $this -> hasMany('App\person','ci_persona');
    }

    public function privileges()
    {

        return $this -> hasMany('App\privilege','cod_privilegio');
    }

    public function sessions()
    {
        return $this -> belongsTo('App\session');
    }

    public function sales()
    {
        return $this -> belongsTo('App\sale');
    }
}
