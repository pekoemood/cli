<?php

declare(strict_types=1);

namespace App\Command;

use App\Domain\TaskList;
use App\Presentation\InputInterface;
use App\Presentation\ViewInterface;

class DeleteTaskCommand implements CommandInterface
{
    public function __construct(
        private TaskList $taskList,
        private ViewInterface $view,
        private InputInterface $input,
    ) {
    }

    public function execute(): void
    {
        $this->view->showDeleteTaskPrompt();
        $taskId = $this->input->readNumber();
        $task = $this->taskList->getTask($taskId);
        if ($task === null) {
            $this->view->showTaskNotFound();
            $this->input->waitKey();
            return;
        }
        $this->taskList->deleteTask($taskId);
    }
}
