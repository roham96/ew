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
            'national_code' => fake()->unique()->numerify('##########'),
            'mobile' => $this->persianMobileNumber(),
            'mobile_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'mobile_verified_at' => null,
        ]);
    }

    public function persianMobileNumber(): string
    {
        $code = [
            '0911',
            '0912',
            '0913',
            '0914',
            '0915',
            '0916',
            '0917',
            '0918',
            '0990',
            '0991',
            '0992',
            '0993',
            '0994',
            '0900',
            '0930',
            '0933',
            '0935',
            '0936',
            '0937',
            '0938',
            '0939',
            '0901',
            '0902',
            '0903',
            '0904',
            '0905',
            '0941',
            '0942',
            '0920',
            '0921',
            '0922',
            '0923',
            '0932',
            '0931',
            '0934',
        ];
        $perfix = $code[array_rand($code, 1)];
        return fake()->unique()->numerify($perfix . '#######');
    }



}
