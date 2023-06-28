<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TourGuide;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TourGuide::factory()->count(50)->create();
    }
}
