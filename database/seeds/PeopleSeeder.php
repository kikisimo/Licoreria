<?php

use Illuminate\Database\Seeder;
use App\person;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $timestamps = false;
    public function run(){
        DB::table('people')->delete();
        for ($i=0; $i<10; $i++) {
            person::create([
                'nombre' => 'nombre '.$i,
                'apellido' => 'apellido  '.$i,
                'telefono' => 123123,
                'direccion' => 'achumani '.$i,
                'correo' => 'ejemplo@gmail.com  '.$i


            ]);
        }
    }
}
