<?php

declare(strict_types=1);

namespace App;

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
