<?php

namespace AlexisVS\MultipassTestingModule\Http\Controllers;

use AlexisVS\MultipassTestingModule\Actions\ExecuteHook;
use App\Domain\Module\Models\Module;
use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;

class HookController extends Controller
{
    public function index(): Response
    {
        $data = ExecuteHook::run();

        $module = Module::where('name', '=', 'multipass-testing-module')->first();

        return Inertia::render($module->getResourcesPagePath('Hook'), $data);
    }

//    Trigger hook action
    public function trigger(): \Illuminate\Http\Response
    {
        return new \Illuminate\Http\Response(
            content: 'Hello from Multipass Testing Module!',
            status: 200
        );
    }
}
