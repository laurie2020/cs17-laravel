<?php

namespace Database\Factories;

use App\Models\Livre;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Livre::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre'=> $this->faker->sentence(3),
            'auteur' => $this->faker->name(),
            'publication' => $this->faker->date(),
            'pages'=> $this->faker->randomNumber(3),
            'mobile' => $this->faker->randomElement(['oui', 'non'])
        ];
    }
}
