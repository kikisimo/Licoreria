<?php

use Illuminate\Database\Seeder;
use App\person;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $timestamps = false;
    public function run(){
        DB::table('people')->delete();
        for ($i=0; $i<10; $i++) {
            person::create([
                'name' => 'nombre '.$i,
                'lastname' => 'apellido  '.$i,
                'phone' => 123123,
                'address' => 'achumani '.$i,
                'e_mail' => 'ejemplo@gmail.com  '.$i


            ]);
        }
    }
}
