<?php

namespace AlexisVS\MultipassTestingModule\Actions;

use App\Domain\Hook\models\Hook;
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
