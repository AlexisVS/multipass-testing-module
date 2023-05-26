<?php

namespace AlexisVS\MultipassTestingModule\Tests;

use AlexisVS\MultipassTestingModule\MultipassTestingModuleServiceProvider;
use Illuminate\Contracts\Config\Repository;
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

    //    public function getEnvironmentSetUp($app): void
    //    {
    //        config()->set('database.default', 'testing');
    //    }

    protected function defineEnvironment($app): void
    {
        // Setup default database to use sqlite :memory:
        tap($app->make('config'), function (Repository $config) {
            $config->set('database.default', 'testbench');
            $config->set('database.connections.testbench', [
                'driver' => 'sqlite',
                'database' => ':memory:',
                'prefix' => '',
            ]);
        });
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
