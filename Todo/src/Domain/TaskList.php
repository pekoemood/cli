<?php

declare(strict_types=1);

namespace App\Domain;

use App\Domain\Task;

class TaskList
{
    private array $tasks = [];
    private int $nextId = 1;

    public function addTask(string $name): void
    {
        $task = new Task($this->nextId, $name);
        $this->nextId++;
        $this->tasks[] = $task;
    }

    public function deleteTask(int $taskId): void
    {
        $newTaskList = array_filter($this->tasks, fn ($task) => $taskId !== $task->getId());
        $this->tasks = array_values($newTaskList);
    }

    public function getTasks(): array
    {
        return $this->tasks;
    }

    public function getTask(int $taskId): ?Task
    {
        foreach ($this->tasks as $task) {
            if ($task->getId() === $taskId) {
                return $task;
            }
        }
        return null;
    }
}
