<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GuideRating;
class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GuideRating::factory()->count(50)->create();
    }
}
