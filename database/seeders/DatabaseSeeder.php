<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\Image;
use App\Models\Produit;
use App\Models\SousCategorie;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        // Categorie::factory(5)->create();
        // SousCategorie::factory(15)->create();
        // Produit::factory(50)->create();
        // Image::factory(200)->create();
    }
}
