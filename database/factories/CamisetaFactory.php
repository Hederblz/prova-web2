<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Camiseta>
 */
class CamisetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'marca' => $this->faker->word(),
            'tecido' => $this->faker->name(),
            'cor' => $this->faker->colorName(),
            'tamanho' => $this->faker->randomNumber()
        ];
    }
}
