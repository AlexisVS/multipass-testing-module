<?php

it('can access to the module hook page', function () {
    $request = $this->get('module.multipass-testing-module.hook.component');

    $request->assertOk(200)
        ->assertSee('Hook.vue');
});
