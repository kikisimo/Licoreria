<?php
/**
 * Created by PhpStorm.
 * User: wilde
 * Date: 20/4/2017
 * Time: 3:38 AM
 */

use Illuminate\Database\Seeder;
use App\product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(){
        DB::table('products')->delete();
        for ($i=0; $i<10; $i++) {
            product::create([

                'name' => 'nombre '.$i,
                'brand' => 'marca  '.$i,
                'content' => 'contenidoNeto  '.$i,
                'due_date' => \Carbon\Carbon::now()
            ]);
        }
    }
}