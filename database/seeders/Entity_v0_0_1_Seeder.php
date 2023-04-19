<?php

namespace AlexisVS\MultipassTestingModule\Database\Seeders;

use AlexisVS\MultipassTestingModule\Models\Entity;
use Illuminate\Database\Seeder;

class EntityV001Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Entity::factory()->count(10)->create();
    }
}
