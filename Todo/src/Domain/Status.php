<?php

declare(strict_types=1);

namespace App\Domain;

enum Status
{
    case PENDING;
    case COMPLETE;
    case INPROGRESS;

    public function label()
    {
        return match($this) {
            Status::PENDING => '未完了',
            Status::INPROGRESS => '進行中',
            Status::COMPLETE => '完了',
        };
    }
}
