<?php
declare(strict_types=1);

namespace App;

class View {

  public function showTasks(TaskList $tasks): string {
    $array = [];
    foreach($tasks->getTasks() as $task) {
      $array[] = $task->getId() . ": " . $task->getTask();
    }
    return implode(PHP_EOL, $array);
  }

  public function menuView() {
    system('clear');
    echo '=== Todo app ===' . PHP_EOL;
    echo '1. タスクの追加' . PHP_EOL;
    echo '2. タスクの一覧' . PHP_EOL;
    echo '3. タスク削除' . PHP_EOL;
  }

  public function addTaskView() {
    system('clear');
    echo '=== Todo Add Task ===' . PHP_EOL;
    echo '追加するタスク名を入力してください>';
  }

  public function taskListView(TaskList $tasks) {
    system('clear');
    echo '=== Todo Task List ===' . PHP_EOL;
    echo $this->showTasks($tasks) . PHP_EOL;
    echo 'Enter' . PHP_EOL;
  }

  public function deleteTask() {
    system('clear');
    echo '=== Todo Task List ===' . PHP_EOL;
    echo '削除するタスク番号を入力してください> ';
  }

  public function deleteSuccess(string $taskName) {
    echo "タスク: {$taskName} の削除に成功しました！";
  }

  public function showErrorMessage() {
    echo '無効な入力です' . PHP_EOL;
  }
}