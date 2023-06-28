<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TravelPackage;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       TravelPackage::factory()->count(5)->create();
    }
}
