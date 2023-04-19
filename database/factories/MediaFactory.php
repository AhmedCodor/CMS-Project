<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $file = $this->faker->imageUrl();
        $type = $this->faker->randomElement(['image', 'video']);

        return [
            'user_id' => 1,
            'post_id' => 1,
            'file' => $file,
            'type' => $type,
        ];
    }
}
