<?php

class TaskList {
  private array $tasks = [];
  private int $nextId = 0;

  public function addTask(string $name): void {
    $task = new Task($this->nextId, $name);
    $this->nextId++;
    $this->tasks[] = $task;
  }

  public function deleteTask(int $taskId): void {
    foreach($this->tasks as $i => $task) {
      if ($task->getId() === $taskId) {
        array_splice($this->tasks, $i, 1);
        return;
      }
    }
    throw new RuntimeException('タスクが見つかりません');
  }
}