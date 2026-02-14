<?php

declare(strict_types=1);

namespace NumberCheck;

class Check {
  public function generateNumber(): int {
    return rand(1, 9);
  }

  public function numberCheck(int $answer): bool {
    return $answer >= 1 && $answer <= 9;
  }

  public function correctCheck(int $number, int $answer) {
    return $number === $answer;
  } 
}