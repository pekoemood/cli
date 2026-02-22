<?php

declare(strict_types=1);

use App\Domain\TaskList;
use App\Domain\Task;
use PHPUnit\Framework\TestCase;

class TaskListTest extends TestCase
{
  public function test_addTaskでタスクを追加できる(): void
  {
    $taskList = new TaskList();
    $taskList->addTask('test');
    $this->assertCount(1, $taskList->getTasks());
    $this->assertSame('test', $taskList->getTasks()[0]->getName());
  }

  public function test_deleteTaskでタスクを削除できる(): void
  {
    $taskList = new TaskList();
    $taskList->addTask('test');
    $taskList->deleteTask(1);
    $this->assertCount(0, $taskList->getTasks());
  }

  public function test_getTasksでタスクを取得できる(): void
  {
    $taskList = new TaskList();
    $taskList->addTask('test');
    $tasks = $taskList->getTasks();
    $this->assertSame('test', $tasks[0]->getName());
  }
}