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
    public $timestamps = false;
    public function run()
    {

        DB::table('providers')->delete();

        for ($i=0; $i<10; $i++) {
            provider::create([
                'name' => 'Proveedor'.$i,
                'phone' => 2711563+$i,
                'e_mail' => 'rasebasss@gmail.com'.$i,
                'address' => 'obrajes calle  '.$i,
                'observation' => 'bien no mas xDDDD'


            ]);
        }
        }
}
