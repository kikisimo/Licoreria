<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class drinktype extends Model
{
    //protected $primaryKey = 'cod_dt';

    protected $fillable = [
        'type', 'description',
    ];

    public function products()
    {

        return $this -> hasMany(Product::class);
    }

}
