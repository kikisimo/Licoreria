<?php

use Illuminate\Database\Seeder;

use App\category;
class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('status')->delete();

        for ($i=0; $i<10; $i++) {
            statu::create([
                'statu_cantidad' => false,
                'statu_vencimiento' => false




            ]);
        }
    }
}