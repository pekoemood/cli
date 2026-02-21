<?php

declare(strict_types=1);

namespace App\Presentation;

class Input implements InputInterface
{
    public function readString(): string
    {
        return strtolower(trim(fgets(STDIN)));
    }

    public function readNumber(): int
    {
        return (int) trim(fgets(STDIN));
    }

    public function waitKey(): void
    {
        fgets(STDIN);
    }
}
