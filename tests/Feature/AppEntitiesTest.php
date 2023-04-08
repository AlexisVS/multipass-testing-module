<?php

use App\Models\User;


it('can find an app entity', function () {
    // Arrange
    $user = User::find(1);

    // Assert
    expect($user)->toBeInstanceOf(User::class);
});

it('can create an app entities', function () {
    // Arrange
    $user = Database\Factories\UserFactory::new()->create();

    // Act
    $retrievedUser = User::find($user->id);

    // Assert
    expect($retrievedUser)->toBeInstanceOf(User::class);
});
