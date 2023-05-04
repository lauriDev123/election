<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VoteFactory extends Factory
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
            "dateVote" => $this->faker->dateTimeBetween('-30 days', 'now')
            //"dateVote" => Str::random(10)
        ];
    }
}
