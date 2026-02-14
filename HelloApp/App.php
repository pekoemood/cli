<?php
require_once __DIR__ . '/Input.php';
require_once __DIR__ . '/Greeter.php';


class App {
  public function __construct(
    private Input $input, 
    private Greeter $greeter
    ){}

  public function run() {
    $this->greeter->startMessage();
    while(true) {
      try {
        $name = $this->input->readLine();
        $this->greeter->helloMessage($name);
        break;
      } catch(Exception $error) {
          $this->greeter->errorMessage();
      }
    }
  }
}

$app = new App(new Input(), new Greeter());
$app->run();

