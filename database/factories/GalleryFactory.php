<?php

namespace Database\Factories;
use App\Models\Gallery;

use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Gallery::class;
    public function definition()
    {
        return [
            'travel_packages_id' => random_int(1,5),
            'image' => 'assets/gallery/bz9Pd1F2rH5QclXChdwHGgoFdEIrQCuSve6ZQhgL.jpg',
        ];
    }
}
