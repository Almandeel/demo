<?php

namespace App\DTO;

class PushData
{
    /**
     * @param CommitData[] $commits
     */
    public function __construct(
        public string $id,
        public string $head,
        public array $commits,
    ) {
    }
}
