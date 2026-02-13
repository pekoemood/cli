<?php
require_once __DIR__ . '/Input.php';
require_once __DIR__ . '/Greeter.php';


class App {
  public function __construct(
    private Input $input, 
    private Greeter $greeter
    ){}

  public function run() {
    while(true) {
      $this->greeter->startMessage();

      $name = $this->input->readLine();
      if (!empty($name)) {
        break;
      }
      $this->greeter->errorMessage();
    }
    $this->greeter->helloMessage($name);
  }
}

$app = new App(new Input(), new Greeter());
$app->run();

