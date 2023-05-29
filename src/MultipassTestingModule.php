<?php

namespace AlexisVS\MultipassTestingModule;

use App\Domain\Component\ComponentBuilder;
use App\Domain\Component\Enums\ComponentDataTypeEnum;
use App\Domain\Hook\Models\Hook;
use App\Domain\Module\Modules\BaseModuleClass;
use App\Domain\User\Models\User;
use Exception;

class MultipassTestingModule extends BaseModuleClass
{
    public string $name = 'multipass-testing-module';

    public string $description = 'This is a testing module for the multipass package.';

    public string $author = 'AlexisVS';

    public string $version = '1.0.2';

    public string $namespace = 'AlexisVS\MultipassTestingModule';

    public string $class_name = 'MultipassTestingModule';

    public string $vendor_path = 'alexisvs/multipass-testing-module';

    /**
     * @throws Exception
     */
    public function installVueComponents(): void
    {
        $hook = Hook::firstOrCreate([
            'name' => 'module.multipass-testing-module.hook.component',
            'description' => 'Test the hook module system inside the testing module',
            'hook_category_id' => 1,
        ]);

        // TODO: C'est comme ça qu'on enregistre le query et qu'on l'appelle
        $modelPropsSql = 'App\Domain\User\Models\User::all()';

        ComponentBuilder::build('TestComponent', $hook, $this->name)
            ->hasData('testSimpleProps', 'testSimpleProps', ComponentDataTypeEnum::Simple->value)
            ->hasData('testModelProps', $modelPropsSql, ComponentDataTypeEnum::Model->value, User::class);

    }
}
