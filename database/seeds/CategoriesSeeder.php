<?php

use Illuminate\Database\Seeder;

use App\category;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->delete();

        for ($i=0; $i<10; $i++) {
            category::create([
                'category' => 'category'.$i,
                'description' => 'description '.$i



            ]);
        }
    }
}
