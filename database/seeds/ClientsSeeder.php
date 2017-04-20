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
    public function run(){
        DB::table('clients')->delete();
        for ($i=0; $i<10; $i++) {
            client::create([
                'nombre' => 'nombre '.$i,
                'apellido' => 'apellido  '.$i,
                'telefono' => 123123,
                'correo' => 'ejemplo@gmail.com  '.$i

            ]);
        }
    }
}
