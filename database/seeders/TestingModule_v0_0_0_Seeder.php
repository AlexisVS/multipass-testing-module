<?php

namespace AlexisVS\MultipassTestingModule\Database\Seeders;

use AlexisVS\MultipassTestingModule\Models\TestingModule;
use Illuminate\Database\Seeder;

class TestingModuleV000Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TestingModule::factory()->count(10)->create();
    }
}
