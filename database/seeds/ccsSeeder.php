<?php

use Illuminate\Database\Seeder;
use App\cc;

class ccsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('ccs')->delete();

        for ($i=0; $i<10; $i++) {
            cc::create([
                'nombre' => 'nombre '.$i,
                'description' => 'description  '.$i

            ]);
        }
    }

   //     DB::table('ccs')->delete();

//        DB::table('ccs')->insert(array(
//
  //          array(

//                'nombre'=>'intro Wordpress',
//

 //               'description'=>'Wordpress is content management system',

   //             'created_at'=>\Carbon\Carbon::now(),
     //           'updated_at'=>\Carbon\Carbon::now(),
         //   ),
       //     array(

           //     'nombre'=>'intro Wordpress2',


             //   'description'=>'Wordpress is content management system2',

//                'created_at'=>\Carbon\Carbon::now(),
  //              'updated_at'=>\Carbon\Carbon::now(),
    //        ),
      //  ));
    //}


}
