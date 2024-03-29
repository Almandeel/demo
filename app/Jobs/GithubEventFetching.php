<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Events\SendGithubData;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class GithubEventFetching implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
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

        event(new SendGithubData($events));
    }
}
