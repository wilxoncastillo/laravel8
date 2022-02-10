<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence();

        return [
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'description' => $this->faker->paragraph(),
            'category' => $this->faker->randomElement(['Desarrollo Web', 'Diseno WEb']),
        ];
    }
}
