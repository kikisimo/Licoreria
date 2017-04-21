<?php

use Illuminate\Database\Seeder;
use App\client;

class PurchasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('purchases')->delete();
        for ($i=0; $i<10; $i++) {
            purchase::create([
                'fecha' => \Carbon\Carbon::now(),
                'cantidad' => 43+$i,
                'precio_unitario' => 123123,

            ]);
            returning ("ci_cliente");
        }
    }
}
