<?php

namespace App\Enums;

enum EventType: string
{
    case Push = 'PushEvent';
    case Fork = 'ForkEvent';
    case PR = 'PullRequestEvent';
    case Issue = 'IssuesEvent';
}
