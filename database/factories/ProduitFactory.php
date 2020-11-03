<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Produit;
use App\Models\SousCategorie;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'descrition' => $this->faker->sentences(),
            'price' => $this->faker->numberBetween(200,1500),
            'categories_id' => SousCategorie::all()->random()->id,
            'user' => User::all()->random()->id,
        ];
    }
}
