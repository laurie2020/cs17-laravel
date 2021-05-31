<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "titre" => $this->faker->sentence(3),
            "image" => $this->faker->image('public/img', 150, 150, 'cats', false),
            "categorie" => $this->faker->word(),
            "description" => $this->faker->sentence(10),
            "auteur" => $this->faker->name(),
            "publication" => $this->faker->date()
        ];
    }
}
