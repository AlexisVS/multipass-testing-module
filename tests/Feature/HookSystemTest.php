<?php

use Illuminate\Testing\TestResponse;

it('can access to the module hook Component page', function () {
    /** @var TestResponse $request */
    $request = $this->get('module/multipass-testing-module/hook');

    $request->assertOk();
});

it('can access to the module hook action page', function () {
    $request = $this->post('module/multipass-testing-module/hook/trigger');

    /** @var TestResponse $request */
    $request->assertOk();
});
