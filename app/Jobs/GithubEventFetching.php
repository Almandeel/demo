<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class GithubEventFetching implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        /**
         * @return string
         */
        $events = Http::withHeaders([
            'X-GitHub-Api-Version' => '2022-11-28',
            'Accept' => 'application/vnd.github+json'
        ])
        ->get('https://api.github.com/events')
        ->body();

        if ($events->successful()) {
            GithubEventFiltering::dispatchSync($events->json());
        }
    }
}
