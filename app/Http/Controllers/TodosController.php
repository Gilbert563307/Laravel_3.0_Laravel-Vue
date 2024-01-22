<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use App\Http\Requests\StoreTodosRequest;
use App\Http\Requests\UpdateTodosRequest;
use App\Http\Resources\TodosResource;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todos::all();
        return TodosResource::make($todos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTodosRequest $request)
    {
        //
        $todo = Todos::create($request->post());
        return response()->json([
            'message' => 'Todos Created Successfully!!!',
            'todo' => $todo
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Todos $todos)
    {
        //
        return response()->json($todos);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todos $todos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTodosRequest $request, Todos $todos)
    {
        $todos->fill($request->post())->save();

        return response()->json([
            'message' => 'Todo Updated Successfully!!!',
            'todo' => $todos
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todos $todos)
    {
        //
        $todos->delete();
        return response()->json([
            'message' => 'Todo Deleted Successfully!!!'
        ]);
    }
}
