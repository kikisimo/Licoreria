<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $primaryKey = 'cot_cat';

    public function products()
    {

        return $this -> belongsTo('App\product');
    }

}
