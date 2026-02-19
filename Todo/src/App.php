<?php
declare(strict_types=1);

namespace App;

require_once __DIR__ . "/../vendor/autoload.php";

use App\TaskList;
use App\View;

class App {
  public function __construct(
    private TaskList $taskList, 
    private View $view
  ){}

  public function handleAddTask() {
    $this->view->addTaskView();
    $taskName = strtolower(trim(fgets(STDIN)));
    $this->taskList->addTask($taskName);
  }

  public function handleTaskList() {
    $this->view->taskListView($this->taskList);
    $stop = strtolower(trim(fgets(STDIN)));
  }

  public function run() {
    while(true) {
      $this->view->menuView();
      $input = strtolower(trim(fgets(STDIN)));
      match($input) {
        '1' => $this->handleAddTask(),
        '2' => $this->handleTaskList(),
        '3' => $this->view->deleteTask(),
        default => $this->view->showErrorMessage(),
      };
    }
  }
}

$app = new App(new TaskList, new View);
$app->run();