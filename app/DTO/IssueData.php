<?php

namespace App\DTO;

use App\Enums\IssueActionType;

class IssueData
{
    public function __construct(
        public string $id,
        public string $number,
        public string $status,
        public string $title,
        public string $url,
        public IssueActionType $action,
    ) {
    }
}
