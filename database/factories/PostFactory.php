<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'productName' => $this->faker->title(),
            'productDiscription' => $this->faker->text(),
            'img' => "images/ZMeItnvXBQ3tteII60eKcilYe5ugrt4S7aKBG2kl.jpg",
        ];
    }
}
