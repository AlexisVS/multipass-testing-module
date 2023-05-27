<?php

namespace AlexisVS\MultipassTestingModule\Tests;

use AlexisVS\MultipassTestingModule\MultipassTestingModuleServiceProvider;
use App;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    /**
     * Automatically enables package discoveries.
     */
    protected $enablesPackageDiscoveries = true;

    /**
     * Automatically loads environment variables.
     */
    protected $loadEnvironmentVariables = true;

    public function getEnvironmentSetUp($app): void
    {
    }

    protected function getPackageProviders($app): array
    {
        return [
            MultipassTestingModuleServiceProvider::class,
        ];
    }

    public static function applicationBasePath(): string
    {
        return __DIR__ . '/../../../../';
    }

    protected function getBasePath(): string
    {
        return __DIR__ . '/../../../../';
    }
}
