<?php

namespace App\Enums;

enum EventType: string
{
    case Push = 'PushEvent';
    case Fork = 'ForkEvent';
    case PR = 'PullRequestEvent';
    case Issue = 'IssuesEvent';

    public static function build(string $value): self
    {
        return match ($value) {
            'PushEvent' => self::Push,
            'ForkEvent' => self::Fork,
            'PullRequestEvent' => self::PR,
            'IssuesEvent' => self::Issue,
        };
    }
}
