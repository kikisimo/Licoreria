<?php

use Illuminate\Database\Seeder;
use App\client;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $timestamps = false;
    public function run(){
        DB::table('clients')->delete();
        for ($i=0; $i<10; $i++) {
            client::create([
                'name' => 'name'.$i,
                'lastname' => 'lastname  '.$i,
                'nit' =>2345,
                'phone' => 123123,
                'e_mail' => 'ejemplo@gmail.com  '.$i

            ]);
        }
    }
}
