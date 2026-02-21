<?php

declare(strict_types=1);

namespace App\Application;

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
        return new App($taskList, $view, $input);
    }
}
