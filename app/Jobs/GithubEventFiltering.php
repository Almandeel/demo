<?php

namespace App\Jobs;

use App\DTO\ActorData;
use App\DTO\EventData;
use App\DTO\OrgData;
use App\DTO\RepoData;
use App\Enums\EventType;
use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;

class GithubEventFiltering
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    public const AllowedEvents = [
        'PushEvent',
        'ForkEvent',
        'PullRequestEvent',
        'IssuesEvent',
    ];

    public function __construct(public array $rawData)
    {
    }

    public function handle(): void
    {
        /** @var Collection<int, array<string, mixed>> */
        $data = collect($this->rawData);

        $filteredEvents = $data->filter(function (array $event): bool {
            return in_array($event['type'], self::AllowedEvents);
        });

        /** @var Collection<int, EventData> */
        $events = $filteredEvents->each(function (array $event): EventData {
            return new EventData(
                id: $event['id'],
                type: EventType::build($event['type']),
                createdAt: Carbon::parse($event['created_at']),
                repo: RepoData::build($event['repo']),
                actor: ActorData::build($event['actor']),
                org: isset($event['org']) ? OrgData::build($event['org']) : null,
                payload: $event['type'],
            );
        });

        // $events->each(function (array $event): void {
        //     match ($event['type']) {
        //     };
        // });
    }
}
