<?php

use Illuminate\Database\Seeder;
use App\provider;
class ProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('providers')->delete();

        for ($i=0; $i<10; $i++) {
            provider::create([
                'nombre' => 'Proveedor'.$i,
                'telefono' => 2711563+$i,
                'correo' => 'rasebasss@gmail.com'.$i,
                'direccion' => 'obrajes calle  '.$i,
                'observacion' => 'bien no mas xDDDD'


            ]);
        }
        }
}
