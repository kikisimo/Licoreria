<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class privilege extends Model
{
    protected $primaryKey = 'cod_privilegio';

    public function usuarios()
    {
        return $this -> hasMany('App\usuario');
    }
}
