<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceProvider>
 */
class ServiceProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'), // You can customize the default password
            'phone_no' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'cnic' => $this->faker->regexify('[0-9]{5}-[0-9]{7}-[0-9]{1}'), // Generating a random CNIC number
            'image' => 'default_user.jpg', // You can customize the default image path
            'status' => '1', // You can customize the default status
            'whatsapp' => $this->faker->phoneNumber,
            'facebook' => $this->faker->url,
            'instagram' => $this->faker->url,
            'twitter' => $this->faker->url,
            'linkdin' => $this->faker->url,
            'tiktok' => $this->faker->url,
        ];
    }
}
