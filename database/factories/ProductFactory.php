<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),  
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 1, 1000),  
            'stock' => $this->faker->numberBetween(1, 100),
            'image' => $this->faker->imageUrl(),  
        ];
    }
    
}