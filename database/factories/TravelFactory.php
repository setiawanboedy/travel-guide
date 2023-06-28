<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TravelPackage;
use Illuminate\Support\Str;
use Carbon\Carbon;

class TravelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = TravelPackage::class;
    public function definition()
    {
        return [
            'title'=> $this->faker->name(),
            'slug'=>$this->faker->username(),
            'location'=> $this->faker->name(),
            'about'=> $this->faker->name(),
            'featured_event'=> $this->faker->name(),
            'language'=> $this->faker->name(),
            'foods'=> $this->faker->name(),
            'departure_date'=> Carbon::now(),
            'duration'=> random_int(1, 5),
            'type'=> $this->faker->name(),
            'price'=> random_int(0, 100000000),
        ];
    }
}
