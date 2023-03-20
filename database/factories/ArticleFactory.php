<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        $faker =  Faker::create();

        return [
            'nombre' => $faker->unique()->text(50),
            'descripcion' => $faker->paragraph(3),
            'precio-de-compra' => $faker->randomFloat(2, 100, 1000),
            'país' => $faker->randomFloat(2, 1100, 2000),
            'divisa' => $faker->randomElement(['S','N']),
            'stock' => $faker->numberBetween(0, 6000),
            'observaciones' => $faker->optional()->paragraph(4)
        ];
    }
}
