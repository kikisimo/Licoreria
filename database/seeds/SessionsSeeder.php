<?php

use Illuminate\Database\Seeder;
use App\session;

class SessionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('sessions')->delete();

    }
}
