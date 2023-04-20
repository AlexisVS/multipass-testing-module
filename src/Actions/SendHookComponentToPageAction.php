<?php

namespace AlexisVS\MultipassTestingModule\Actions;

use App\Models\Hook;
use Exception;
use Lorisleiva\Actions\Concerns\AsAction;
use Src\core\hook\HookProcessor;

class SendHookComponentToPageAction
{
    use AsAction;

    /**
     * @throws Exception
     */
    public function handle(): array
    {
        $hook = Hook::where('name', '=', 'module.multipass-testing-module.hook.component')
            ->first();

        return (new HookProcessor(collect([$hook])))->process();
    }
}
