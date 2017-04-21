<?php
/**
 * Created by PhpStorm.
 * User: wilde
 * Date: 20/4/2017
 * Time: 3:20 AM
 */

namespace database\seeds;


use App\billsale;

class BillsaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $timestamps = false;
    public function run()
    {

        DB::table('bill_sales')->delete();
    }
}