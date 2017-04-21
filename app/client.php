<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{

    protected $primaryKey = 'ci_cliente';

    public function sales()
    {

        return $this -> belongsTo('App\sale');
    }
}
