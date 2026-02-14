<?php

class Input {
  public function readLine() {
    $line = fgets(STDIN);
    if ($line === false) {
      throw new RuntimeException('入力の読み取りに失敗しました');
    }

    $name = trim($line);
    if ($name === '') {
      throw new RuntimeException('未入力です。');
    }

    return $name;
  }
}