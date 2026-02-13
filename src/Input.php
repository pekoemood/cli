<?php

class Input {
  public function readLine() {
    return trim(fgets(STDIN));
  }
}