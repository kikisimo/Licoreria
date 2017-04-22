<?php
/**
 * Created by PhpStorm.
 * User: wilde
 * Date: 20/4/2017
 * Time: 3:45 AM
 */

use Illuminate\Database\Seeder;


use App\sale;

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
            sale::create([
                'fecha' => \Carbon\Carbon::now(),
                'hora' => \Carbon\Carbon::now(),
                'observacion' => 'ejemplo@gmail.com  '.$i,
            ]);
        }
    }
}