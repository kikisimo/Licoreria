<?php

use Illuminate\Database\Seeder;
use App\liquor_store;
class LiquorStoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('liquor_stores')->delete();


            liquor_store::create([
                'nombre' => 'Licoreria de la Esquina',
                'direccion' => 'achumani calle 10',
                'telefono' => 69877009,
                 'NIT' => 7845


            ]);

    }
}
