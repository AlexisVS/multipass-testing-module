<?php

namespace AlexisVS\MultipassTestingModule\Http\Controllers;

use AlexisVS\MultipassTestingModule\Actions\SendHookComponentToPage;
use App\Http\Controllers\Controller;
use App\Models\Module;
use Inertia\Inertia;

class HookController extends Controller
{
    public function index()
    {
        $data = SendHookComponentToPage::run();

        $module = Module::where('name', '=', 'multipass-testing-module')->first();

        return Inertia::render($module->getResourcesPagePath('Hook'), $data);
    }
}
