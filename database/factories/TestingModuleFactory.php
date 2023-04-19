<?php

namespace AlexisVS\MultipassTestingModule\Database\Factories;

use App\Models\User;
use Src\core\module\ModuleFactory;

class TestingModuleFactory extends ModuleFactory
{
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
