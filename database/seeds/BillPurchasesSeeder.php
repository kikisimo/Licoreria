<?php

use Illuminate\Database\Seeder;

use App\billpurchases;
class BillPurchasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('bill_purchases')->delete();

    }
}