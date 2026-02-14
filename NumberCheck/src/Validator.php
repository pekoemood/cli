<?php

declare(strict_types=1);

namespace NumberCheck;

class Validator {
  public function isValidNumber(string $answer): bool {
    return ctype_digit($answer) && (int) $answer >= 1 && (int) $answer <= 9;
  }

  public function isCorrect(int $number, int $answer): bool {
    return $number === $answer;
  } 
}