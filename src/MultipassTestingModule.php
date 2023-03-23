<?php

namespace AlexisVS\MultipassTestingModule;

use App\Enums\Component\ComponentDataTypeEnum;
use App\Enums\Entities\Hook\HookEnum;
use App\Models\User;
use Src\core\component\ComponentBuilder;
use Src\core\module\modules\BaseModuleClass;

class MultipassTestingModule extends BaseModuleClass
{
    public string $name = 'multipass-testing-module';

    public string $description = 'This is a testing module for the multipass package.';

    public string $author = 'AlexisVS';

    public string $version = '0.0.1';

    public string $namespace = 'AlexisVS\MultipassTestingModule';

    public string $class_name = 'MultipassTestingModule';

    public string $vendor_path = 'alexisvs/multipass-testing-module';

    public function installVueComponents(): void
    {
//        TODO: C'est comme ça qu'on enregistre le query et qu'on l'appelle
        $modelPropsSql = 'App\Models\User::all()';

        ComponentBuilder::build('TestComponent', HookEnum::EditProfileForm->value, $this->name)
            ->hasData('testSimpleProps', 'testSimpleProps', ComponentDataTypeEnum::Simple->value)
            ->hasData('testModelProps', $modelPropsSql, ComponentDataTypeEnum::Model->value, User::class);
    }
}
