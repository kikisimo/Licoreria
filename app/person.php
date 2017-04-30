<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    protected $primaryKey = 'ci_person';

    public function usuarios()
    {
        return $this -> hasMany('App\usuario');
    }

    public function roles()
    {
        return $this -> belongsTo('App\role','id_rol');
    }
}
