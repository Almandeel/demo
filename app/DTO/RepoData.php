<?php

namespace App\DTO;

class RepoData
{
    public function __construct(
        public string $id,
        public string $name,
        public string $url,
    ) {
    }

    public static function build(array $data): self
    {
        return new self(
            id: $data['id'],
            name: $data['name'],
            url: $data['url'],
        );
    }
}
