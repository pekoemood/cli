<?php

declare(strict_types=1);

namespace App;

interface InputInterface
{
    public function readString(): string;
    public function readNumber(): int;
    public function waitKey(): void;
}
