<?php

namespace Database\Factories;

use App\Models\Categorie;
use App\Models\User;
use App\Models\SousCategorie;
use Illuminate\Database\Eloquent\Factories\Factory;

class SousCategorieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SousCategorie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'photo' => $this->faker->imageUrl(),
            'icon' => $this->faker->word(),
            'descrition' => $this->faker->sentences(),
            'categories_id' => Categorie::all()->random()->id,
            'user' => User::all()->random()->id,
        ];
    }
}
