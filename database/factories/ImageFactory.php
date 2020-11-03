<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Image;
use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->imageUrl(),
            'produit_id' => Produit::all()->random()->id,
            'user' => User::all()->random()->id,
        ];
    }
}
