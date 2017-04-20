<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //Seeder
       // $this->call(ClientsSeeder::class);
        //ejemplo
       // $this->call(ccsSeeder::class);
        //seeders rafael
        $this->call(ClientsSeeder::class);
        $this->call(ReservationsSeeder::class);
        $this->call(LiquorStoresSeeder::class);
        $this->call(ProvidersSeeder::class);
        $this->call(CategoriesSeeder::class);
<<<<<<< HEAD
        $this->call(PurchasesSeeder::class);
=======
        $this->call(RolesSeeder::class);
>>>>>>> 2b2cab2a0cb8df1f8bf6bff6dadaf96366505c55
//  no se olviden de compose dump-autoload y luego php artisan db:seed
    }
}
