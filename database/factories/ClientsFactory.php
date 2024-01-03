<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clients>
 */
class ClientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name=fake()->firstName();
        $lname=fake()->lastName();
        $email = strtolower($name.$lname.'@gmail.com');
        return [
            'fname'=>$name,
            'lname'=>$lname,
            'email'=>$email,
            'email_verified_at'=>now(),
            'password'=>Str::random(random_int(8, 16))
        ];
    }
}
