<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Folow_User;

class Follow_UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'followers' => $this->faker->unique()->numberBetween(1 , 30) ,
            'following' => $this->faker->unique()->numberBetween(1 , 30) ,
        ];
    }
}
