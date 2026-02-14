<?php

declare(strict_types=1);

namespace NumberCheck;

class Input {
  public function readLine(): int {
    return (int) trim(fgets(STDIN));
  }  
}