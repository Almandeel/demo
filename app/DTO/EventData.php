<?php

namespace App\DTO;

use App\Enums\EventType;
use Illuminate\Support\Carbon;

class EventData
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public string $id,
        public EventType $type,
        public Carbon $createdAt,
        public RepoData $repo,
        public ActorData $actor,
        public ?OrgData $org,
        public mixed $payload,
    ) {
    }
}
