<?php

namespace AlexisVS\MultipassTestingModule\Tests;

use AlexisVS\MultipassTestingModule\MultipassTestingModuleServiceProvider;
use Illuminate\Foundation\Testing\Concerns\InteractsWithDatabase;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
//    use RefreshDatabase;
    use InteractsWithDatabase;

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

//    protected function setUp(): void
//    {
//        parent::setUp();
//
////        Factory::guessFactoryNamesUsing(
////            fn (string $modelName) => 'AlexisVS\\MultipassTestingModule\\Database\\Factories\\'.class_basename($modelName).'Factory'
////        );
//    }

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
}
