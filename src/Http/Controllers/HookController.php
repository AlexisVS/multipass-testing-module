<?php

namespace AlexisVS\MultipassTestingModule\Http\Controllers;

use AlexisVS\MultipassTestingModule\Actions\SendHookComponentToPageAction;
use App\Http\Controllers\Controller;
use App\Models\Module;
use Inertia\Inertia;
use Inertia\Response;

class HookController extends Controller
{
    public function index(): Response
    {
        $data = SendHookComponentToPageAction::run();

        $module = Module::where('name', '=', 'multipass-testing-module')->first();

        return Inertia::render($module->getResourcesPagePath('Hook'), $data);
    }
}
