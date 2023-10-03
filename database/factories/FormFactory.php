<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Form>
 */
class FormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $name = $this->faker->name(),
            'email' => strtolower(str_replace(' ','.',$name)) . Arr::random(['@yahoo.com', '@gmail.com', '@hotmail.com', '@example.com']), 
            'password' => $this->faker->password(8,10),  
            'bounty' => mt_rand(3, 99) . '.' . mt_rand(0, 99),
            'image' => $this->faker->randomElement(['luffy.jpg',
                                                    'zoro.jpg', 
                                                    'nami.jpg', 
                                                    'sanji.jpg', 
                                                    'usopp.jpg'])
        ];
    }
}
