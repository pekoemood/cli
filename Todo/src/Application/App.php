<?php

declare(strict_types=1);

namespace App\Application;

require_once __DIR__ . "/../../vendor/autoload.php";

use App\Command\CommandRegistry;
use App\Presentation\InputInterface;
use App\Presentation\ViewInterface;

class App
{
    public function __construct(
        private CommandRegistry $registry,
        private ViewInterface $view,
        private InputInterface $input,
    ) {
    }

    public function run()
    {
        while (true) {
            $this->view->menuView();
            $input = $this->input->readNumber();
            $command = $this->registry->get($input);
            $command ? $command->execute() : $this->view->showErrorMessage();
        }
    }
}
