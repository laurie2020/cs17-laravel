<?php

namespace Database\Factories;

use App\Models\Portofolio;
use Illuminate\Database\Eloquent\Factories\Factory;

class PortofolioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Portofolio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=> $this->faker->sentence(3),
            'description'=> $this->faker->paragraph(),
            'path'=> $this->faker->url(),
            'categorie' => $this->faker->word()
        ];
    }
}
