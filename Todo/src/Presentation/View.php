<?php

declare(strict_types=1);

namespace App\Presentation;

use App\Domain\TaskList;

class View implements ViewInterface
{
    private function showTasks(TaskList $tasks): string
    {
        $array = [];
        foreach ($tasks->getTasks() as $task) {
            $array[] = $task->getId() . ": " . $task->getName();
        }
        return implode(PHP_EOL, $array);
    }

    public function menuView(): void
    {
        system('clear');
        echo '=== Todo app ===' . PHP_EOL;
        echo '1. タスクの追加' . PHP_EOL;
        echo '2. タスクの一覧' . PHP_EOL;
        echo '3. タスク削除' . PHP_EOL;
    }

    public function addTaskView(): void
    {
        system('clear');
        echo '=== Todo Add Task ===' . PHP_EOL;
        echo '追加するタスク名を入力してください>';
    }

    public function taskListView(TaskList $tasks): void
    {
        system('clear');
        echo '=== Todo Task List ===' . PHP_EOL;
        echo $this->showTasks($tasks) . PHP_EOL;
        echo 'キーを押すとメニューに戻ります ' . PHP_EOL;
    }

    public function showDeleteTaskPrompt(): void
    {
        system('clear');
        echo '=== Todo Task List ===' . PHP_EOL;
        echo '削除するタスク番号を入力してください> ';
    }

    public function showErrorMessage(): void
    {
        echo '無効な入力です' . PHP_EOL;
    }

    public function showTaskNotFound(): void
    {
        echo '該当のタスクIDが見つかりませんでした' . PHP_EOL;
    }
}
