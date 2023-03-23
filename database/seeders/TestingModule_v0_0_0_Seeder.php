<?php

namespace AlexisVS\MultipassTestingModule\Database\Seeders;

use AlexisVS\MultipassTestingModule\Database\Factories\TestingModuleFactory;
use App\Models\User;
use Illuminate\Database\Seeder;

class TestingModuleV000Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (User::all() as $user) {
            (new TestingModuleFactory())->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
