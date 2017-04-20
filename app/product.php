<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $primaryKey = 'cod_prod';
    protected $foreignKey = 'cot_cat';
    protected $foreignKey2 = 'cod_TB';
}
