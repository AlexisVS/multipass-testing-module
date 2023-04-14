<?php

it('can access the App home page', function () {
    $this->get('/')->assertStatus(200);
});

it('can access his own route', function () {
    $this->get('/module/multipass-testing-module/test-response')->assertStatus(200);
});
