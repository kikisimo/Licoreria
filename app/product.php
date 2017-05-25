<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\purchase;

class product extends Model
{
    protected $primaryKey = 'cod_prod';


    protected $fillable = [
        'name', 'brand','content','due_date', 'cod_cat',
    ];

    //prueba Relaciones Lucho
    public function category()
    {
        return $this -> belongsTo(Category::class, 'cod_cat');
    }

/*
    public function drinktypes()
    {
        return $this -> belongsTo('App\drinktype','cot_dt');
    }

    public function sale_products()
    {

        return $this -> hasMany('App\saleProduct');
    }

    public function warehouses()
    {

        return $this -> hasMany('App\warehouse');
    }

    public function purchases()
    {

        return $this -> hasMany('App\purchase');
    }
*/
//Scope Wilde no tocar
    public function scopeSearch($query, $name)
    {
        return $query->where('name', 'LIKE', "%$name");
    }
}
