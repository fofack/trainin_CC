<?php

namespace Database\Factories\basile;

use App\Models\basile\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $cat = array('sante','Roman','Poesie','Culture','Mathematique','Physique','Philosophie');
        return [
            'nom' => $this->faker->randomElement($cat),
            'description' => $this->faker->text,
        ];
    }
}
