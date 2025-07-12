<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoStoreRequest;
use App\Http\Requests\TodoUpdateRequest;
use App\Http\Resources\TodoResource;
use App\Models\Todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::query()
            ->orderBy("created_at", "desc")
            ->get();

        $collection = TodoResource::collection($todos);

        return $collection;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TodoStoreRequest $request)
    {
        $todo = Todo::create($request->all());

        $resource = ["data" => TodoResource::make($todo)];

        $response = response($resource, 201);

        return $response;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $todo = Todo::find($id);

        if (!$todo) {
            return response([], 404);
        }

        $resource = ["data" => TodoResource::make($todo)];

        return response($resource, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TodoUpdateRequest $request, string $id)
    {
        $todo = Todo::find($id);

        if (!$todo) {
            return response([], 404);
        }

        $todo->update($request->all());

        $resource = ["data" => TodoResource::make($todo)];

        return response($resource, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todo = Todo::find($id);

        if (!$todo) {
            return response([], 404);
        }

        $todo->delete();

        return response(null, 204);
    }
}
