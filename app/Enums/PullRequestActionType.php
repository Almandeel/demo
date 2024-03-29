<?php

namespace App\Enums;

enum PullRequestActionType: string
{
    case Opened = 'opened';
    case Edited = 'edited';
    case Closed = 'closed';
    case Reopened = 'reopened';
    case Assigned = 'assigned';
    case Unassigned = 'unassigned';
    case ReviewRequested = 'review_requested';
    case ReviewRequestRemoved = 'review_request_removed';
    case Labeled = 'labeled';
    case Unlabeled = 'unlabeled';
    case Synchronize = 'synchronize';
}
