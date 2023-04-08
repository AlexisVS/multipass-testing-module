<?php

use App\Models\User;


it('can find an app entity', function () {
    // Arrange
    $user = User::find(1);

    // Assert
    expect($user)->toBeInstanceOf(User::class);
});

it('can create an app entities with factory', function () {
    // Arrange
    $user = User::factory()->create();

    // Act
    $retrievedUser = User::find($user->id);

    // Assert
    expect($retrievedUser)->toBeInstanceOf(User::class);
});
