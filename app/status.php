<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    //
    protected $primaryKey = 'cot_status';
    public function warehouses()
    {

        return $this -> hasMany('App\warehouse','cod_almacen');
    }
}
