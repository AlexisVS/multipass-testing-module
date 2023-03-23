<?php

namespace AlexisVS\MultipassTestingModule\Database\Factories;

use AlexisVS\MultipassTestingModule\Models\TestingModule;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestingModuleFactory extends Factory
{
    protected $model = TestingModule::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create(),
            'string' => $this->faker->sentence(),
            'integer' => $this->faker->randomNumber($this->faker->numberBetween(1, 8)),
            'float' => $this->faker->randomFloat(2, 0, 1000),
            'date' => $this->faker->date(),
        ];
    }
}
