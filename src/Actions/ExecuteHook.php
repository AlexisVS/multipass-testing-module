<?php

namespace AlexisVS\MultipassTestingModule\Actions;

use App\Domain\Hook\Models\Hook;
use Exception;
use Lorisleiva\Actions\Concerns\AsAction;
use App\Domain\Hook\HookProcessor;

class ExecuteHook
{
    use AsAction;

    /**
     * @throws Exception
     */
    public function handle(): array
    {
        $hook = Hook::where('name', '=', 'module.multipass-testing-module.hook.Component')
            ->first();

        return (new HookProcessor(collect([$hook])))->process();
    }
}
