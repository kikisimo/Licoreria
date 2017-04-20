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

        $this->call(PurchasesSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(DrinkTypesSeeder::class);
        $this->call(PrivilegesSeeder::class);
        $this->call(PurchasesSeeder::class);

        $this->call(RolesSeeder::class);
        $this->call(BillissuesSeeders::class);
        $this->call(BillsaleSeeder::class);
//  no se olviden de compose dump-autoload y luego php artisan db:seed
    }
}
