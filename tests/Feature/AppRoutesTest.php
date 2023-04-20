<?php

use AlexisVS\MultipassTestingModule\Models\Entity;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\assertDatabaseMissing;

it('can access the App home page', function () {
    $this->get('/')->assertStatus(200);
});

it('can access his own route', function () {
    $this->get('/module/multipass-testing-module/test-response')->assertStatus(200);
});

it('can access his own route (Entity route ressource), access controller and retrieve Entities', function () {
    $request = $this->get('/module/multipass-testing-module/entity');
    $content = json_decode($request->getContent());

    expect($content)->toBeArray()
        ->and(count($content))->toBeGreaterThan(0);
});

it('can post to Entity.post route', function () {
    $request = $this->post('/module/multipass-testing-module/entity', [
        'name' => 'can post to Entity.post route',
    ]);

    assertDatabaseHas('entities', [
        'name' => 'can post to Entity.post route',
    ]);
});

it('can update an Entity with Entity.put route', function () {
    /** @var Entity $entity */
    $entity = Entity::factory()->create();
    expect($entity)->toBeInstanceOf(Entity::class);

    $this->put("/module/multipass-testing-module/entity/{$entity->id}", [
        'name' => 'can update an Entity with Entity.put route',
    ]);

    assertDatabaseHas('entities', [
        'name' => 'can update an Entity with Entity.put route',
    ]);
});

it('can show an Entity with Entity.show route', function () {
    /** @var Entity $entity */
    $entity = Entity::factory()->create();
    expect($entity)->toBeInstanceOf(Entity::class);

    $request = $this->get("/module/multipass-testing-module/entity/{$entity->id}");
    $content = json_decode($request->getContent());

    expect($content)->toBeObject()
        ->and($content->name)->toBe($entity->name);
});

it('can delete an Entity with Entity.delete route', function () {
    /** @var Entity $entity */
    $entity = Entity::factory()->create();
    expect($entity)->toBeInstanceOf(Entity::class);

    $this->delete("/module/multipass-testing-module/entity/{$entity->id}");

    assertDatabaseMissing('entities', [
        'id' => $entity->id,
    ]);
});
