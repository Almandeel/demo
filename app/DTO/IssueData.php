<?php

namespace App\DTO;

use App\Enums\IssueActionType;

class IssueData
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public IssueActionType $action,
    ) {
    }
}
