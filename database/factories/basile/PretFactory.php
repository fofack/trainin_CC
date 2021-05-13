<?php

namespace Database\Factories\basile;

use App\Models\basile\Client;
use App\Models\basile\Livre;
use App\Models\basile\Pret;
use Illuminate\Database\Eloquent\Factories\Factory;

class PretFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pret::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_id' => Client::all()->random()->id,
            'livre_id' => Livre::all()->random()->id,
            'date_pret' => $this->faker->date,
            'date_restitue' => $this->faker->date,
            'nbre_exple' => $this->faker->numberBetween(1,20)
        ];
    }
}
