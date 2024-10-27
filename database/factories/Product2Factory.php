<?php

namespace Database\Factories;

use App\Models\Product2;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product2>
 */
class Product2Factory extends Factory
{
    protected $model = Product2::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>rand(1,10),
            'name'=>$this->faker->word(),
            'price'=>rand(20,80),
            'quantity'=>rand(10,50),
        ];
    }
}
