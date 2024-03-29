<?php

namespace App\DTO;

class ActorData
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public string $id,
        public string $username,
        public string $name,
        public string $url,
        public string $avatar,
    ) {
    }
}
