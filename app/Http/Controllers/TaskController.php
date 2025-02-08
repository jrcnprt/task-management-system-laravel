<?php

namespace App\Http\Controllers;

use App\Services\TaskService;
use App\Http\Requests\CreateTaskStatusRequest;
use App\Http\Requests\UpdateTaskStatusRequest;

class TaskController extends Controller
{
    
    protected $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->taskService->getAllTasks(),201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateTaskStatusRequest $request)
    {
        return response()->json($this->taskService->createTask($request->all()), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json($this->taskService->getTaskById($id), 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskStatusRequest $request, string $id)
    {
        return response()->json($this->taskService->updateTask($id, $request->all()),201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json($this->taskService->deleteTask($id), 204);
    }
}
