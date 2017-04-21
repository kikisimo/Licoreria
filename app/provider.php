<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class provider extends Model
{
    protected $primaryKey = 'cod_prov';

    public function purchases()
    {

        return $this -> belongsTo('App\purchase');
    }
    }
