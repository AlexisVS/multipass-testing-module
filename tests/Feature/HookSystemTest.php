<?php

it('can access to the module hook Component page', function () {
    $request = $this->get('module.multipass-testing-module.hook.Component');

    $request->assertOk(200)
        ->assertSee('Hook.vue');
});

it('can access to the module hook action page', function () {
    $request = $this->get('module.multipass-testing-module.hook.trigger');

    $request->assertOk(200)
        ->assertSee('Hello from Multipass Testing Module!');
});
