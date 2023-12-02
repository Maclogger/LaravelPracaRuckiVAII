<?php

namespace Database\Factories;

use App\Models\Uzivatel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UzivatelFactory extends Factory
{
    protected $model = Uzivatel::class;

    public function definition(): array
    {
        return [
            'meno' => $this->faker->firstName,
            'priezvisko' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'heslo' => $this->faker->password,
        ];
    }
}
