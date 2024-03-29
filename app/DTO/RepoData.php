<?php

namespace App\DTO;

class RepoData
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public string $id,
        public string $name,
        public string $url,
    ) {
    }
}
