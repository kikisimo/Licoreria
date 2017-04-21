<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class drinktype extends Model
{
    protected $primaryKey = 'cot_TB';

    public function products()
    {

        return $this -> belongsTo('App\product');
    }
}
