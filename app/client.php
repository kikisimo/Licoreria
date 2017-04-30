<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{

    protected $primaryKey = 'ci_client';

    public function sales()
    {

        return $this -> hasMany('App\sale');
    }
}
