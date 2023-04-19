<?php

namespace AlexisVS\MultipassTestingModule\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Src\core\module\models\ModuleModel;

class Entity extends ModuleModel
{
    protected $fillable = [
        'name',
    ];

}
