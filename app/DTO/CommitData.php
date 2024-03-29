<?php

namespace App\DTO;

class RepoData
{
    public function __construct(
        public string $sha,
        public string $message,
        public string $url,
    ) {
    }
}
