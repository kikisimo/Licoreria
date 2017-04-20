<?php

use Illuminate\Database\Seeder;

use App\category;
class DrinkTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('drinktypes')->delete();

        for ($i=0; $i<10; $i++) {
            drinktype::create([
                'tipo' => 'tipo '.$i,
                'descripcion' => 'Descripcion '.$i



            ]);
        }
    }
}