<?php

namespace App\DTO;

use Illuminate\Support\Carbon;
use App\Enums\PullRequestActionType;
class PullRequestData
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public string $url,
        public string $id,
        public int $number,
        public string $title,
        public PullRequestActionType $action,
        public ActorData $actor,
        public Carbon $createdAt,
        public RepoData $repo
    ) {
    }
}
