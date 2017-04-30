<?php
/**
 * Created by PhpStorm.
 * User: wilde
 * Date: 20/4/2017
 * Time: 3:45 AM
 */

use Illuminate\Database\Seeder;


use App\saleProduct;

class saleProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(){
        DB::table('sale_products')->delete();
        for ($i=0; $i<10; $i++) {
            saleProduct::create([
                'quantity' => 80,

            ]);
        }
    }
}