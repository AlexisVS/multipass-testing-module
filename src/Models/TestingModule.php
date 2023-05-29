<?php

namespace AlexisVS\MultipassTestingModule\Models;

use App\Domain\Module\ModuleModel;
use App\Domain\User\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TestingModule extends ModuleModel
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
