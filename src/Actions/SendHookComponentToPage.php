<?php

namespace AlexisVS\MultipassTestingModule\Actions;

use AlexisVS\MultipassTestingModule\MultipassTestingModule;
use App\Models\Hook;
use Inertia\Inertia;
use Inertia\Response;
use Lorisleiva\Actions\Concerns\AsAction;

class SendHookComponentToPage
{
    use AsAction;

    public function handle(): Response
    {
        $hook = Hook::where('name', '=', 'module.multipass-testing-module.hook')->first();
    }
}
