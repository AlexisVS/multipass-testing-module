<?php

use App\Models\User;

it('can create and retrieve an app entities', function () {
    // Arrange
    $user = User::factory()->create();

    // Act
    $retrievedUser = User::find($user->id);

    // Assert
    expect($retrievedUser)->toBeInstanceOf(User::class);
});
