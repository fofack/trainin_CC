<?php

namespace Database\Factories\basile;

use App\Models\basile\Category;
use App\Models\basile\Livre;
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
            'nom' => $this->faker->name,
            'nom_auteur' => $this->faker->name,
            'numero_isbn' => $this->faker->numberBetween(10,50000),
            'date_edition' => $this->faker->date,
            'description' => $this->faker->text,
            'nombre_exple' => $this->faker->numberBetween(1,10),
            'etat' => $this->faker->randomElement(array('emprunte','restitue')),
            'image' => $this->faker->image('public/assets/images/livres',371,248,null,false),
            'category_id' => Category::all()->random()->id,
        ];
    }
}
