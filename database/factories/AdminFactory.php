<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
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
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin'),
        ];
    }
}
