<?php

use Illuminate\Database\Seeder;
use App\reservation;

class ReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $timestamps = false;
    public function run(){
        DB::table('reservations')->delete();

        for ($i=0; $i<10; $i++) {
            reservation::create([
                'date' => \Carbon\Carbon::now(),
                'quantity' => 43+$i,
                'status' => false


            ]);
        }
    }
}
