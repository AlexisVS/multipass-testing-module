<?php

namespace AlexisVS\MultipassTestingModule\Tests;

use AlexisVS\MultipassTestingModule\MultipassTestingModuleServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'AlexisVS\\MultipassTestingModule\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        $migration = include __DIR__.'/../database/migrations/create_testing_modules_table.php';
        $migration->up();
    }

    protected function getPackageProviders($app): array
    {
        return [
            MultipassTestingModuleServiceProvider::class,
        ];
    }
}
