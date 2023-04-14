<?php

namespace AlexisVS\MultipassTestingModule\Tests;

use AlexisVS\MultipassTestingModule\MultipassTestingModuleServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    /**
     * Automatically enables package discoveries.
     *
     * @var bool
     */
    protected $enablesPackageDiscoveries = true;

    /**
     * Automatically loads environment variables.
     *
     * @var bool
     */
    protected $loadEnvironmentVariables = true;

    public function getEnvironmentSetUp($app): void
    {
        config()->set('database.default', 'testing');
    }

    protected function getPackageProviders($app): array
    {
        return [
            MultipassTestingModuleServiceProvider::class,
        ];
    }

    public static function applicationBasePath(): string
    {
        return __DIR__.'/../../../../';
    }

    protected function getBasePath(): string
    {
        return __DIR__.'/../../../../';
    }
}
