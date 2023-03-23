<?php

namespace AlexisVS\MultipassTestingModule\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AlexisVS\MultipassTestingModule\MultipassTestingModule
 */
class MultipassTestingModule extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AlexisVS\MultipassTestingModule\MultipassTestingModule::class;
    }
}
