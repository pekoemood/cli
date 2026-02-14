<?php

declare(strict_types=1);

namespace NumberCheck;

class Message {
  public function askMessage(): void {
    echo '数字を入力してください' . PHP_EOL;
  }

  public function errorMessage(): void {
    echo '1~9の間の数字を入力してください' . PHP_EOL;
  }

  public function incorrectMessage(): void {
    echo '不正解です。もう一度' . PHP_EOL;
  }

  public function correctMessage(): void {
    echo '正解です！';
  }
}