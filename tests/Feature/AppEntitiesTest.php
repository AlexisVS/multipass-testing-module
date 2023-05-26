<?php

namespace AlexisVS\MultipassTestingModule\Tests\Feature;

use App\Domain\User\Models\User;
use Illuminate\Database\Eloquent\Collection;

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

it('can create a lot of app entities with factory', function () {
    // Arrange
    $users = User::factory()->count(10)->create();

    // Assert
    expect($users)->toBeInstanceOf(Collection::class)
        ->and($users->count())->toBe(10);
});
