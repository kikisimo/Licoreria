<?php

use Illuminate\Database\Seeder;

use App\status;
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
            status::create([
                'statu_cantidad' => false,
                'statu_vencimiento' => false




            ]);
        }
    }
}