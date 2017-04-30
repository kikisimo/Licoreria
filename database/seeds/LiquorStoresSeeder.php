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
                'name' => 'Licoreria de la Esquina',
                'address' => 'achumani calle 10',
                'phone' => 69877009,
                 'NIT' => 7845


            ]);

    }
}
