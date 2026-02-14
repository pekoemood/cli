<?php
declare(strict_types=1);

namespace NumberCheck;

require_once __DIR__ . '/Message.php';
require_once __DIR__ . '/Input.php';
require_once __DIR__ . '/Check.php';

class App {
  public function __construct(
    private Message $message,
    private Input $input,
    private Check $check,
  ){}

  public function run(): void {
    $number = $this->check->generateNumber();
    $this->message->askMessage();
    while(true) {
      $answer = $this->input->readLine();
      if (!$this->check->numberCheck($answer)) {
        $this->message->errorMessage();
        continue;
      }

      if ($this->check->correctCheck($number, $answer)) {
        $this->message->correctMessage();
        break;
      } else {
        $this->message->incorrectMessage();
      }    
    }
  }
}

$app = new App(new Message(), new Input(), new Check());
$app->run();
