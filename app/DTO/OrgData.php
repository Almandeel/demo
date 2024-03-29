<?php

namespace App\DTO;

class OrgData
{
    public function __construct(
        public string $id,
        public string $name,
        public string $url,
        public string $avatar,
    ) {
    }

    public static function build(array $data): self
    {
        return new self(
            id: $data['id'],
            name: $data['name'],
            url: $data['url'],
            avatar: $data['avatar_url'],
        );
    }
}
