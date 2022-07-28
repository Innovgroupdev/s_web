<?php

namespace Database\Factories;

use App\Models\Publicites;
use Illuminate\Database\Eloquent\Factories\Factory;


class PublicitesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Publicites::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'libelle' => $this->faker->text($this->faker->numberBetween(5, 4096)),
            'desc' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'img_url' => $this->faker->text($this->faker->numberBetween(5, 4096)),
            'user_id' => $this->faker->numberBetween(0, 999),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
