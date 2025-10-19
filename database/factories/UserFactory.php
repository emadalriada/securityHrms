<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => fake()->unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('password'),
            'nameEnglish' => fake()->name(),
            'nameArabic' => fake()->name(),
            'nationalId' => fake()->numerify('##############'),
            'company' => fake()->company(),
            'workType' => fake()->randomElement(['Full Time', 'Part Time', 'Contract']),
            'companyCode' => fake()->bothify('??###'),
            'location' => fake()->city(),
            'telephone' => fake()->phoneNumber(),
            'telephone2' => fake()->optional()->phoneNumber(),
            'startDate' => fake()->optional()->date(),
            'birthDate' => fake()->optional()->date(),
            'jobTitle' => fake()->jobTitle(),
            'education' => fake()->randomElement(['Bachelor Degree', 'Master Degree', 'PhD', 'High School']),
            'area' => fake()->optional()->city(),
            'vp' => fake()->optional()->name(),
            'hr' => fake()->boolean(20),
            'dataChecked' => fake()->boolean(50),
            'photoDone' => fake()->boolean(50),
            'idDone' => fake()->boolean(50),
            'allThingsDone' => fake()->boolean(30),
            'out' => fake()->boolean(10),
            'leaveDate' => fake()->optional()->date(),
            'reasonOfLeaving' => fake()->optional()->sentence(),
            'address' => fake()->optional()->address(),
            'notes' => fake()->optional()->paragraph(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            // No email_verified_at field in our schema
        ]);
    }
}
