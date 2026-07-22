<?php

namespace App\Policies;

use App\Models\Idea;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class IdeaPolicy
{
    /**
     * Determine whether the user can modify any models.
     */
    public function modify(User $user, Idea $idea): bool
    {
        return $idea->user->is($user);
    }
}
