<?php

declare(strict_types=1);

namespace App\Command;

use App\Domain\TaskList;
use App\Presentation\InputInterface;
use App\Presentation\ViewInterface;

class TaskListCommand implements CommandInterface
{
    public function __construct(
        private TaskList $taskList,
        private ViewInterface $view,
        private InputInterface $input,
    ) {
    }

    public function execute(): void
    {
        $this->view->taskListView($this->taskList);
        $this->input->waitKey();
    }
}
