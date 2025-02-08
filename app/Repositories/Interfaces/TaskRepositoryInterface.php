<?php
namespace App\Repositories\Interfaces;

use App\Models\Task;

interface TaskRepositoryInterface
{
    public function getAllTasks();
    public function getTaskById(int $id);
    public function createTask(array $data);
    public function updateTask(int $id, array $data);
    public function deleteTask(int $id);
}
