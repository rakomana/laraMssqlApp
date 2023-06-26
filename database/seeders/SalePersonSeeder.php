<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SalePerson;

class SalePersonSeeder extends Seeder
{
    use HasFactory;
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SalePerson::factory()->count(50)->create(); 
    }
}
