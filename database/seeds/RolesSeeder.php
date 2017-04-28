<?php

use Illuminate\Database\Seeder;
use App\role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $timestamps = false;
    public function run(){
        DB::table('roles')->delete();
        for ($i=0; $i<10; $i++) {
            role::create([
                'cargo' => 'cargo '.$i,
                'descripcion' => 'ninguna  '.$i


            ]);
        }
    }
}
