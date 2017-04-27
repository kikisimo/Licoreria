<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $primaryKey = 'id_rol';

    public function people()
    {
        return $this -> hasMany('App\person');
    }
}
