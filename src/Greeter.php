<?php

class Greeter {
  public function startMessage(): void {
    echo '名前を入力してください。' . PHP_EOL;
  }

  public function helloMessage(string $name): void {
    echo 'Hello ' . $name . '!' . PHP_EOL;
  }

  public function errorMessage(): void {
    echo '未入力です。もう一度' . PHP_EOL;
  } 
}

