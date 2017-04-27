<?php

use Illuminate\Database\Seeder;
use App\session;

class SessionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $timestamps = false;
    public function run(){
        DB::table('sessions')->delete();
        for ($i=0; $i<10; $i++) {
            session::create([
                'fecha_ent' => \Carbon\Carbon::now(),
                'fecha_sal' => \Carbon\Carbon::now(),
                'hora_ent' => \Carbon\Carbon::now(),
                'hora_sal' => \Carbon\Carbon::now()


            ]);
        }
    }
}
