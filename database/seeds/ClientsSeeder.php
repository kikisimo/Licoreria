<?php

use Illuminate\Database\Seeder;
use App\client;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $timestamps = false;
    public function run(){
        DB::table('clients')->delete();
        for ($i=0; $i<10; $i++) {
            client::create([
                'nombre' => 'nombre '.$i,
                'apellido' => 'apellido  '.$i,
<<<<<<< HEAD
                //'nit' => 12313,
=======
                'nit' => 12345,
>>>>>>> 2b2cab2a0cb8df1f8bf6bff6dadaf96366505c55
                'telefono' => 123123,
                'correo' => 'ejemplo@gmail.com  '.$i

            ]);
        }
    }
}
