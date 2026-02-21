<?php

declare(strict_types=1);

namespace App;

require_once __DIR__ . "/../vendor/autoload.php";

use App\Command\AddTaskCommand;

class App
{
    public function __construct(
        private TaskList $taskList,
        private View $view,
        private InputInterface $input,
    ) {
    }

    // public function handleAddTask() {
    //   $this->view->addTaskView();
    //   $taskName = $this->input->readString();
    //   $this->taskList->addTask($taskName);
    // }

    // public function handleTaskList() {
    //   $this->view->taskListView($this->taskList);
    //   $this->input->waitKey();
    // }

    // public function handleDeleteTask() {
    //   $this->view->deleteTask();
    //   $taskId = $this->input->readNumber();
    //   $this->taskList->deleteTask($taskId);
    //   $this->input->waitKey();
    // }


    public function run()
    {
        $command = [
          1 => new AddTaskCommand($this->taskList, $this->view, $this->input),
        ];



        while (true) {
            $this->view->menuView();
            $input = $this->input->readNumber();
            $command = $command[$input] ?? null;
            $command ? $command->execute() : $this->view->showErrorMessage();
        }
    }
}

$app = AppFactory::create();
$app->run();
