<?php

namespace App\Enums;

enum IssueActionType: string
{
    case Opened = 'opened';
    case Edited = 'edited';
    case Closed = 'closed';
    case Reopened = 'reopened';
    case Assigned = 'assigned';
    case Unassigned = 'unassigned';
    case Labeled = 'labeled';
    case Unlabeled = 'unlabeled';
}
