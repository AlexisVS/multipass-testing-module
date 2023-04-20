<?php

namespace AlexisVS\MultipassTestingModule\Http\Controllers;

use AlexisVS\MultipassTestingModule\Models\Entity;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class EntityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Collection
    {
        return Entity::all();
    }

//    /**
//     * Show the form for creating a new resource.
//     */
//    public function create()
//    {
//
//    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Entity $entity): Entity
    {
        $entity->fill($request->all());
        $entity->save();

        return $entity;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Entity
    {
        return Entity::find($id);
    }

//    /**
//     * Show the form for editing the specified resource.
//     */
//    public function edit(string $id)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, Entity $entity): Entity
    {
        $entity->fill($request->all());
        $entity->save();

        return $entity;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): Entity
    {
        /** @var Entity $entity */
        $entity = Entity::find($id);
        $entity->delete();

        return $entity;
    }
}
