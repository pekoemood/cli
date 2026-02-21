<?php
declare(strict_types=1);

namespace App;

use RuntimeException;
use App\Task;

class TaskList {
  private array $tasks = [];
  private int $nextId = 1;

  public function addTask(string $name): void {
    $task = new Task($this->nextId, $name);
    $this->nextId++;
    $this->tasks[] = $task;
  }

  public function deleteTask(int $taskId): void {
    $newTaskList = array_filter($this->tasks, fn($task) => $taskId !== $task->getId());
    $this->tasks = $newTaskList;
  }

  public function getTasks(): array {
    return $this->tasks;
  }

  public function getTaskName(int $taskId): ?string {
    $tasks = array_filter($this->tasks, fn($task) => $task->getId() === $taskId);
    return !empty($tasks) ? reset($tasks)->getTask() : null;
  }
}