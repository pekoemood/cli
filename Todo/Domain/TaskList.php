<?php

class TaskList {
  private array $tasks = [];
  private int $nextId = 1;

  public function addTask(string $name): void {
    $task = new Task($this->nextId, $name);
    $this->nextId++;
    $this->tasks[] = $task;
  }


}