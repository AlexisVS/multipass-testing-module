<?php

namespace AlexisVS\MultipassTestingModule\Commands;

use Illuminate\Console\Command;

class MultipassTestingModuleCommand extends Command
{
    public $signature = 'multipass-testing-module';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
