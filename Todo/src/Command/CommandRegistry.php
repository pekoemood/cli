<?php

declare(strict_types=1);

namespace App\Command;

class CommandRegistry
{
    private array $commands = [];

    public function register(int $key, CommandInterface $command): void
    {
        $this->commands[$key] = $command;
    }

    public function get(int $key): ?CommandInterface
    {
        return $this->commands[$key] ?? null;
    }
}
