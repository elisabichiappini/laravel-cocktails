<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cocktail;
use Faker\Generator as Faker;


class CocktailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $cocktail = new Cocktail();

            $cocktail->name = $faker->randomElement(['Martini', 'Mojito', 'Moscow Mule', 'Margarita', 'Gin Tonic']);
            $cocktail->brand = $faker->randomElement(['Bacardi', 'Campari', 'Amaro Del Capo', 'Jekemaster', 'Gordon', 'Belvedere']);
            $cocktail->price = $faker->randomFloat(2, 5, 50);
            $cocktail->is_alcholic = $faker->boolean();
            $cocktail->description = $faker->text(100);

            $cocktail->save();
        }
    }
}
