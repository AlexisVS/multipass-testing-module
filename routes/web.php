<?php

use App\Models\Module;
use Inertia\Inertia;

$module = Module::where('name', 'multipass-testing-module')->first();

Route::name('module.'.$module->name)
    ->prefix('module/'.$module->name)
    ->group(function () use ($module) {

        Route::get('/', function () {
            return new \Illuminate\Http\Response(
                content: 'Hello from Multipass Testing Module!',
                status: 200
            );
        });

        Route::get('/front', function () use ($module) {
            return Inertia::render($module->getResourcesPagePath('Front'));
        });

        Route::get('/back', function () use ($module) {
            return Inertia::render($module->getResourcesPagePath('Back'));
        });
    });
