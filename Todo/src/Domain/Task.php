<?php

declare(strict_types=1);

namespace App;

use InvalidArgumentException;

class Task
{
    private string $name;

    public function __construct(
        private int $id,
        string $name,
        private Status $status = Status::PENDING,
    ) {
        if (empty($name)) {
            throw new InvalidArgumentException('タスク名は空にできません');
        }
        $this->name = $name;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTask(): string
    {
        return $this->name;
    }

    public function getStatus(): string
    {
        return $this->status->label();
    }
}
