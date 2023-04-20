<?php

namespace AlexisVS\MultipassTestingModule\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HookV002Seeder extends Seeder
{
    public function run(): void
    {
        DB::table('hooks')->insert([
            [
                'name' => 'module.multipass-testing-module.hook.component',
                'description' => 'Test the hook module system inside the testing module',
                'hook_category_id' => 1,
            ]
        ]);
    }
}
