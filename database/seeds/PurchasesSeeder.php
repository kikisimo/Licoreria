<?php

use Illuminate\Database\Seeder;
use App\purchase;

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
                'date' => \Carbon\Carbon::now(),
                'quantity' => 43+$i,
                'price' => 123123,
            ]);
            //returning ("ci_cliente");
        }
    }
}
