<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    protected $primaryKey = 'ci_persona';

    public function usuarios()
    {
        return $this -> belongsTo('App\usuario');
    }

    public function roles()
    {
        return $this -> hasMany('App\role','id_rol');
    }
}
