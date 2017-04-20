
<?php

use Illuminate\Database\Seeder;

use App\category;
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
            statu::create([
                'precio_unitario' => 123123,
                'cantidad' => 43+$i,
                'cantidad_minima' => false



            ]);

    }
}