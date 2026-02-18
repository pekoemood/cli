<?php
declare(strict_types=1);

class View {

  public function menuView() {
    echo '=== Todo app ===' . PHP_EOL;
    echo '1. タスクの追加' . PHP_EOL;
    echo '2. タスクの一覧' . PHP_EOL;
    echo '3. タスク削除' . PHP_EOL;
  }

  public function showErrorMessage() {
    echo '無効な入力です' . PHP_EOL;
  }
}