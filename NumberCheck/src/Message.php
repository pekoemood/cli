<?php

declare(strict_types=1);

namespace NumberCheck;

class Message {
  public function showPrompt(): void {
    echo '数字を入力してください' . PHP_EOL;
  }

  public function showError(): void {
    echo '1~9の間の数字を入力してください' . PHP_EOL;
  }

  public function showIncorrect(): void {
    echo '不正解です。もう一度' . PHP_EOL;
  }

  public function showCorrect(): void {
    echo '正解です！' . PHP_EOL;
  }
}