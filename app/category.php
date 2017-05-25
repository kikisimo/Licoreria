<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = [
      'category', 'description',
    ];
    //protected $primaryKey = 'cod_cat';

//prueba Relaciones Lucho

    public function products()
    {

        return $this -> hasMany(Product::class);
    }

}
