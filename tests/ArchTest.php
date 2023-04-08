<?php

//it('will not use debugging functions')
//    ->expect(['dd', 'dump', 'ray'])
//    ->each
//    ->not
//    ->toBeUsed();

use App\Models\User;

it('can create and retrieve an app entities', function () {
    // Arrange
    $user = User::factory()->create();

    // Act
    $retrievedUser = User::find($user->id);

    // Assert
    expect($retrievedUser)->toBeInstanceOf(User::class)
        ->and($retrievedUser->name)->toBe('John Doe')
        ->and($retrievedUser->email)->toBe('johndoe@example.com');
});
