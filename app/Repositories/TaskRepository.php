<?php
namespace App\Repositories;

use App\Models\Task;

use App\Repositories\Interfaces\TaskRepositoryInterface;

class TaskRepository implements TaskRepositoryInterface
{
    public function getAllTasks()
    {
        return Task::all();
    }

    public function getTaskById(int $id)
    {
        return Task::findOrFail($id);
    }

    public function createTask(array $data)
    {
        return Task::create($data);
    }

    public function showTask(int $id)
    {
        return Task::findOrFail($id);
    }

    public function updateTask(int $id, array $data)
    {
        $task = Task::findOrFail($id);
        $task->update($data);
        return $task;
    }

    public function deleteTask(int $id)
    {
        return Task::destroy($id);
    }
}
