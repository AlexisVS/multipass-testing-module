<?php

namespace AlexisVS\MultipassTestingModule\Database\Factories;

use AlexisVS\MultipassTestingModule\Models\Entity;
use App\Domain\Module\ModuleFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Entity>
 */
class EntityFactory extends ModuleFactory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
