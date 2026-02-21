<?php

declare(strict_types=1);

namespace App\Command;

use App\Input;
use App\TaskList;
use App\View;

class AddTaskCommand implements CommandInterface
{
    public function __construct(
        private TaskList $taskList,
        private View $view,
        private Input $input,
    ) {
    }

    public function execute(): void
    {
        $this->view->taskListView($this->taskList);
        $this->input->waitKey();
    }
}
