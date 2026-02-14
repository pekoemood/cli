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
    private Validator $validator,
  ){}

  private function generateNumber(): int {
    return rand(1, 9);
  }

  public function run(): void {
    $number = $this->generateNumber();
    $this->message->showPrompt();
    while(true) {
      $answer = $this->input->readLine();
      if (!$this->validator->isValidNumber($answer)) {
        $this->message->showError();
        continue;
      }

      if ($this->validator->isCorrect($number, $answer)) {
        $this->message->correctMessage();
        break;
      } else {
        $this->message->incorrectMessage();
      }    
    }
  }
}

$app = new App(new Message(), new Input(), new Validator());
$app->run();
