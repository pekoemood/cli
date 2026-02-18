<?php
declare(strict_types=1);

require_once __DIR__ . '/../View/View.php';
require_once __DIR__ . '/../Domain/TaskList.php';

class App {
  public function __construct(
    private TaskList $taskList, 
    private View $view
  ){}

  public function run() {
    while(true) {
      $this->view->menuView();
      $input = strtolower(trim(fgets(STDIN)));
      match($input) {
        'q' => exit,
        default => $this->view->showErrorMessage(),
      };
    }
  }
}

$app = new App(new TaskList(), new View());
$app->run();