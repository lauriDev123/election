<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ParticipantFactory extends Factory
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
            "nom" =>$this -> faker ->name,
            "num_cni" => "CNI" .rand(1000,5000),
            "age" =>rand(21,100),
            "login" => Str::random(10),
            "pwd" => Str::random(10),
            "email" => Str::random(10),
            "etat" => rand(0,1),
            "nom" => Str::random(10),
            "telephone" => Str::random(10),
            "id_region" => rand(1,20)
        ];
    }
}
