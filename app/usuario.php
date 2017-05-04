<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $primaryKey = 'id_user';


    public function people()
    {

        return $this -> belongsTo('App\person','ci_person');
    }

    public function privileges()
    {

        return $this -> belongsTo('App\privilege','cod_privilege');
    }

    public function sessions()
    {
        return $this -> hasMany('App\session');
    }

    public function sales()
    {
        return $this -> hasMany('App\sale');
    }


}
