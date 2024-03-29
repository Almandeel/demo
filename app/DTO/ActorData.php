<?php

namespace App\DTO;

class ActorData
{
    public function __construct(
        public string $id,
        public string $username,
        public string $name,
        public string $url,
        public string $avatar,
    ) {
    }

    public static function build(array $data): self
    {
        return new self(
            id: $data['id'],
            username: $data['login'],
            name: $data['display_login'],
            url: $data['url'],
            avatar: $data['avatar_url'],
        );
    }
}
