<?php

namespace Database\Factories;

use App\Models\Articles;
use Illuminate\Database\Eloquent\Factories\Factory;


class ArticlesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Articles::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'libelle' => $this->faker->text($this->faker->numberBetween(5, 4096)),
            'desc' => $this->faker->text($this->faker->numberBetween(5, 4096)),
            'tags' => $this->faker->text($this->faker->numberBetween(5, 4096)),
            'img' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'user_id' => $this->faker->numberBetween(0, 999),
            'categorie_id' => $this->faker->numberBetween(0, 999),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
