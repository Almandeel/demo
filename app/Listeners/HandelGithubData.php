<?php

namespace App\Listeners;

use App\Events\SendGithubData;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class HandelGithubData
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SendGithubData $event): void
    {
        //
    }
}
