<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class session extends Model
{
    protected $primaryKey = 'cod_sesion';

    public function usuarios()
    {

        return $this -> belongsTo('App\usuario','id_user');
    }
}
