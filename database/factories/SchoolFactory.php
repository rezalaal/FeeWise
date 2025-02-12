<?php

namespace Database\Factories;

use App\Models\EducationalLevel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Uuid;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\School>
 */
class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Generate a unique school code (example: 8 digits)
        $code = $this->faker->unique()->numberBetween(10000000, 99999999);
        return [
            'id' => Uuid::uuid4()->toString(),
            'name' => fake()->name(),
            'code' => $code,
            'educational_level_id' => EducationalLevel::all()->random()
        ];
    }
}
