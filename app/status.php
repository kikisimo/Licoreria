<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{

    protected $primaryKey = 'cod_status';

    public function warehouses()
    {

        return $this->hasMany('App\warehouse', 'cod_almacen');
    }

    protected $table = 'status';
}
