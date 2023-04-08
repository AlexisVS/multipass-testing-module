<?php

use App\Models\Module;

$module = Module::where('name', 'multipass-testing-module')->first();

Route::name('module.'.$module->name)->prefix('module/'.$module->name)->group(function () {
    Route::get('/', function () {
        return new \Illuminate\Http\Response('Hello from Multipass Testing Module!', 200);
    })->name('.get');

    Route::post('test', function () {
        return 'Hello from Multipass Testing Module!';
    })->name('.post');

    Route::get('page', function () {
        return 'Hello from Multipass Testing Module!';
    })->name('.get');
});
