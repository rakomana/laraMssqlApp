<?php

namespace Database\Seeders;

use App\Models\PersonalDetail;
use Illuminate\Database\Seeder;

class PersonalDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PersonalDetail::factory()->count(50)->create(); 
    }
}
