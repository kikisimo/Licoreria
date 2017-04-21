<?php

use Illuminate\Database\Seeder;
use App\privilege;

class PrivilegesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $timestamps = false;
    public function run(){
        DB::table('privileges')->delete();
        for ($i=0; $i<10; $i++) {
            privilege::create([
                'nombre' => 'nombre '.$i,
                'descripcion' => 'ninguna  '.$i


            ]);
        }
    }
}
