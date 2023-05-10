<?php

namespace AlexisVS\MultipassTestingModule\Actions;

use App\Domain\Hook\HookProcessor;
use App\Domain\Hook\Models\Hook;
use Exception;
use Lorisleiva\Actions\Concerns\AsAction;

class ExecuteHook
{
    use AsAction;

    /**
     * @throws Exception
     */
    public function handle(): array
    {
        $hooks = Hook::where('name', '=', 'module.multipass-testing-module.hook.Component')->get();

        $data = [];

        (new HookProcessor($hooks, $data))->process();
        return $data;
    }
}
