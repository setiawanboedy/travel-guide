<?php

namespace Database\Factories;
use App\Models\TourGuide;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = TourGuide::class;
    public function definition()
    {
        return [
            'travel_packages_id'=>random_int(1,5),
            'name'=> $this->faker->name(),
            'slug'=>$this->faker->username(),
            'image'=>'assets/guide/hvJwAwJVr1f95icDsm62KqndS2gnpu0CzVS5Bc3N.jpg',
            'location'=> Str::random(10),
            'transportation'=> Str::random(10),
            'days'=>random_int(1,5),
            'price'=>random_int(200000,5000000),
        ];
    }
}
