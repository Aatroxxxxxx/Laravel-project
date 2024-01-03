<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admins>
 */
class AdminsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name=fake()->lastName();
        $email = strtolower($name.'@admin.com');
        return [
            'name'=>$name,
            'email'=>$email,
            'password'=>Str::random(random_int(8, 16))
        ];
    }
}
