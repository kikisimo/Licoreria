
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
                'quantity' => 123123,
                'price' => 43+$i,
                'minimum_quantity' => false



            ]);

    }
}}