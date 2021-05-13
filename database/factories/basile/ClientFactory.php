<?php

namespace Database\Factories\basile;

use App\Models\basile\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name,
            'telephone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
        ];
    }
}
