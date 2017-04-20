<?php

use Illuminate\Database\Seeder;

class ccsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        //DB::table('ccs')->delete();

        DB::table('ccs')->insert(array(

            array(

                'nombre'=>'intro Wordpress',


                'description'=>'Wordpress is content management system',

                'created_at'=>\Carbon\Carbon::now(),
                'updated_at'=>\Carbon\Carbon::now(),
            )
        ));
    }


}
