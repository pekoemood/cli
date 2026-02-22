<?php

declare(strict_types=1);

namespace App\Application;

use App\Command\AddTaskCommand;
use App\Command\CommandRegistry;
use App\Command\DeleteTaskCommand;
use App\Command\TaskListCommand;
use App\Domain\TaskList;
use App\Presentation\View;
use App\Presentation\Input;

class AppFactory
{
    public static function create(): App
    {
        $taskList = new TaskList();
        $view     = new View();
        $input    = new Input();
        $register = new CommandRegistry();
        $register->register(1, new AddTaskCommand($taskList, $view, $input));
        $register->register(2, new TaskListCommand($taskList, $view, $input));
        $register->register(3, new DeleteTaskCommand($taskList, $view, $input));

        return new App($register, $view, $input);
    }
}
