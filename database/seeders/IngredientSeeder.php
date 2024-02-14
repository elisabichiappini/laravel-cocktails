<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients = ['Menta', 'Succo', 'Lime', 'Soda', 'Vermount'];

        foreach ($ingredients as $ingredient) {

            $new_ingredient = new Ingredient();

            $new_ingredient->name = $ingredient;

            $new_ingredient->save();
        }
    }
}
