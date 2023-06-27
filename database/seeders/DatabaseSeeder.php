<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CustomerSeeder::class);
        $this->call(SalePersonSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(InterestSeeder::class);
        $this->call(DocumentSeeder::class);
        $this->call(PersonalDetailSeeder::class);
        $this->call(UserSeeder::class);
    }
}
