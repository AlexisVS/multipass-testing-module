<?php

use AlexisVS\MultipassTestingModule\Http\Controllers\EntityController;
use App\Enums\Permissions\DashboardPermissionsEnum;
use App\Models\Module;
use Inertia\Inertia;

$module = Module::where('name', 'multipass-testing-module')->first();

// FRONT
Route::name('module.'.$module->name.'.')
    ->prefix('module/'.$module->name)
    ->group(function () use ($module) {

        Route::get('/test-response', function () {
            return new \Illuminate\Http\Response(
                content: 'Hello from Multipass Testing Module!',
                status: 200
            );
        })->name('test-response');

        Route::get('/front', function () use ($module) {
            return Inertia::render($module->getResourcesPagePath('Front'));
        })->name('front');

<<<<<<< HEAD
        Route::resource('/entity', EntityController::class)->except(['create', 'edit']);
=======
>>>>>>> f7bb7ff2cf2b27ee814402ff4bc59232bb95347a
    });

// BACK
Route::name('administration.module'.$module->name.'.')
    ->prefix('administration/module/'.$module->name)
    ->middleware(['auth', 'verified', 'permission:'.DashboardPermissionsEnum::LookDashboard->value])
    ->group(function () use ($module) {

        Route::get('/back', function () use ($module) {
            return Inertia::render($module->getResourcesPagePath('Back'));
        })->name('back');
    });
