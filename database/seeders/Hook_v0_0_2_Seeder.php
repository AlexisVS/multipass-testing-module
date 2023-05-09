<?php

namespace AlexisVS\MultipassTestingModule\Database\Seeders;

use App\Domain\Hook\Models\Hook;
use Illuminate\Database\Seeder;

class HookV002Seeder extends Seeder
{
    public function run(): void
    {
        Hook::create([
            'name' => 'module.multipass-testing-module.hook.Component',
            'description' => 'Test the hook module system inside the testing module',
            'hook_category_id' => 1,
        ]);
    }
}
