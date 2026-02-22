<?php

declare(strict_types=1);

namespace App\Presentation;

use App\Domain\TaskList;

interface ViewInterface
{
    public function menuView(): void;
    public function addTaskView(): void;
    public function taskListView(TaskList $tasks): void;
    public function showDeleteTaskPrompt(): void;
    public function showErrorMessage(): void;
    public function showTaskNotFound(): void;
}
