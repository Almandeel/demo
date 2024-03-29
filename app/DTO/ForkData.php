<?php

namespace App\DTO;

class ForkData
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public int $id,
        public string $full_name,
        public string $description,
        public string $url,
        public ActorData $owner,
        public OrgData $organization,
    ) {
    }
}
