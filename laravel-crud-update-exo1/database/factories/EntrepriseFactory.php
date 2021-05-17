<?php

namespace Database\Factories;

use App\Models\Entreprise;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntrepriseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Entreprise::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=> $this->faker->company(),
            'adresse' => $this->faker->address(),
            'telephone' => $this->faker->e164PhoneNumber(),
            'pDeContact' => $this->faker->name(),
            'image' => $this->faker->imageUrl()
        ];
    }
}
