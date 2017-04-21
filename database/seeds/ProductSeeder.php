<?php
/**
 * Created by PhpStorm.
 * User: wilde
 * Date: 20/4/2017
 * Time: 3:38 AM
 */

namespace database\seeds;
use App\product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $timestamps = false;
    public function run(){
        DB::table('products')->delete();
        for ($i=0; $i<10; $i++) {
            product::create([
                'nombre' => 'nombre '.$i,
                'marca' => 'marca  '.$i,
                'contenido neto' => 'contenidoNeto  '.$i,
                'Fecha de vencimiento' => \Carbon\Carbon,

            ]);
        }
    }
}