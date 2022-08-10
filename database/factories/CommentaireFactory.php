<?php

namespace Database\Factories;

use App\Models\Commentaire;
use Illuminate\Database\Eloquent\Factories\Factory;


class CommentaireFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Commentaire::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'description' => $this->faker->text($this->faker->numberBetween(5, 4096)),
            'name' => $this->faker->text($this->faker->numberBetween(5, 4096)),
            'email' => $this->faker->email,
            'is_valid' => $this->faker->boolean,
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
