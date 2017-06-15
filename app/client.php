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
    public function scopeSearch($query, $nit)
    {
        return $query->where('nit', 'LIKE', "%$nit");
    }
}
