<?php

namespace AlexisVS\MultipassTestingModule\Database\Seeders;

use AlexisVS\MultipassTestingModule\Database\Factories\TestingModuleFactory;
use Illuminate\Database\Seeder;

class TestingModuleV000Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        (new TestingModuleFactory())->count(3)->create();
        TestingModuleFactory::new()->count(3)->create();
    }
}
