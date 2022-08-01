<?php

namespace Database\Factories;

use App\Models\Informer;
use Illuminate\Database\Eloquent\Factories\Factory;


class InformerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Informer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'email' => $this->faker->email,
            'pays' => $this->faker->text($this->faker->numberBetween(5, 4096)),
            'numero' => $this->faker->text($this->faker->numberBetween(5, 4096)),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
