<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    protected $primaryKey = 'ci_persona';
    protected $foreignKey = 'id_rol';
}
