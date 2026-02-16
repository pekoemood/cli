<?php

class Task {
  public function __construct(
    private int $id,
    private string $name
  ){
    if (empty($name)) {
      throw new InvalidArgumentException('タスク名は空にできません');
    }
  }

  public function getId(): int {
    return $this->id;
  }
  
  public function getTask(): string {
    return $this->name;
  }
}