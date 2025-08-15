<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title'=>fake()->text(30) ,
            'description'=>fake()->text(100) ,
            'price'=>fake()->numberBetween(500,800) ,
            'code'=>str_replace(" ","",strtolower(fake()->unique()->text(16))),
            'image'=>"https://i.postimg.cc/hhW1Fxhr/OIP.jpg",
            'user_id'=>User::inRandomOrder()->value('id')

            
        ];
    }
}
