<?php
/**
 * Created by PhpStorm.
 * User: wilde
 * Date: 20/4/2017
 * Time: 3:45 AM
 */

use Illuminate\Database\Seeder;


use App\sale;
use App\saleProduct;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(){

        DB::table('sales')->delete();


        for ($i=0; $i<10; $i++) {

           $sale= sale::create([

                //'date' => \Carbon\Carbon::now(),
                //'h' => \Carbon\Carbon::now(),
                'observation' => 'ejemplo@gmail.com  '.$i,

            ]);
        }

       /* DB::table('sale_products')->delete();
        for ($i=0; $i<10; $i++) {
            saleProduct::create([

                'cantidad' => 80,
                'cod_venta' => $sale,
            ]);*/

    }




}