<?php

use Illuminate\Testing\TestResponse;

it('can access to the module hook Component page', function () {
    /** @var TestResponse $request */
    $request = $this->get('module/multipass-testing-module/hook');
<<<<<<< HEAD
=======

>>>>>>> c8e0310af4da724aa24bae0dd0a9aec669d07770
    $request->assertOk();
});

it('can access to the module hook action page', function () {
    /** @var TestResponse $request */
    $request = $this->post('module/multipass-testing-module/hook/trigger');
    $request->assertOk();
});
