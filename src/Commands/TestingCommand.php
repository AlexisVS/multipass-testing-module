<?php

namespace AlexisVS\MultipassTestingModule\Commands;

use Illuminate\Console\Command;

class TestingCommand extends Command
{
    public $signature = 'testing';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
