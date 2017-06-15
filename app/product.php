<?php

namespace App;

use App\Http\Requests\DrinktypeRequest;
use Illuminate\Database\Eloquent\Model;
use App\purchase;

class product extends Model
{
    protected $primaryKey = 'cod_prod';


    protected $fillable = [
        'name', 'brand','content','stock','price','due_date', 'cod_cat', 'cod_dt',
    ];

    //prueba Relaciones Lucho
    public function category()
    {
        return $this -> belongsTo(Category::class, 'cod_cat');
    }


    public function drinktype()
    {
        return $this -> belongsTo(Drinktype::class, 'cod_dt');
    }
/*
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
