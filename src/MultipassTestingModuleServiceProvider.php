<?php

namespace AlexisVS\MultipassTestingModule;

use App\Domain\Module\ModuleServiceProvider;

class MultipassTestingModuleServiceProvider extends ModuleServiceProvider
{
    public function __construct($app)
    {
        parent::__construct($app);
    }
}
