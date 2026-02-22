<?php

declare(strict_types=1);

use App\Domain\Status;
use App\Domain\Task;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
  public function test_getIdでidを取得できる(): void 
  {
    $task = new Task(1, 'test');
    $this->assertSame(1, $task->getId());
  }

  public function test_getNameでnameを取得できる(): void
  {
    $task = new Task(1, 'test');
    $this->assertSame('test', $task->getName());
  }

  public function test_getStatusでstatusを取得できる(): void
  {
    $task = new Task(1, 'test', Status::COMPLETE);
    $this->assertSame(Status::COMPLETE, $task->getStatus());
  }

  public function test_タスク名をからにするとエラーが返る(): void {
    $this->expectException(\InvalidArgumentException::class);
    $this->expectExceptionMessage('タスク名は空にできません');
    $task = new Task(1, '');
  }
}