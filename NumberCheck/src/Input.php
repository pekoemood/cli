<?php

declare(strict_types=1);

namespace NumberCheck;

class Input {
  public function readLine(): string {
    return trim(fgets(STDIN));
  }  
}