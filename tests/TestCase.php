<?php

namespace AlexisVS\MultipassTestingModule\Tests;

use AlexisVS\MultipassTestingModule\MultipassTestingModuleServiceProvider;
use File;
use Illuminate\Database\Eloquent\Factories\Factory;
use Laravel\Sanctum\SanctumServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use SplFileInfo;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn(string $modelName) => 'AlexisVS\\MultipassTestingModule\\Database\\Factories\\' . class_basename($modelName) . 'Factory'
        );
    }

    public function getEnvironmentSetUp($app)
    {
//        config()->set('database.default', 'testing');
        config()->set('database.testing', config('database.connections.sqlite'));
        config()->set('database.default', config('database.connections.sqlite'));

//        $migration = include __DIR__ . '/../database/migrations/create_testing_modules_table.php';
//        $migration->up();

        $moduleMigrations = File::files(__DIR__ . '/../database/migrations');
        $applicationMigrations = collect(File::files(__DIR__ . '/../../../../database/migrations'));

        foreach ($moduleMigrations as $moduleMigration) {
            if (!in_array($moduleMigration->getFilename(), $applicationMigrations->map(fn(SplFileInfo $file) => $file->getFilename())->toArray())) {
                $moduleMigration = include $moduleMigration->getPathname();
                $moduleMigration->up();
            }
        }
    }

    protected function getPackageProviders($app): array
    {
        return [
            SanctumServiceProvider::class,
            MultipassTestingModuleServiceProvider::class,
        ];
    }

    protected function getBasePath(): string
    {
        return __DIR__ . '/../../../../';
    }
}
