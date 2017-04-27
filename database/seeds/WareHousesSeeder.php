
<?php

use Illuminate\Database\Seeder;

use App\warehouse;
class WareHousesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('warehouses')->delete();

        for ($i=0; $i<10; $i++) {
            warehouse::create([
                'precio_unitario' => 123123,
                'cantidad' => 43+$i,
                'cantidad_minima' => false



            ]);

    }
}}