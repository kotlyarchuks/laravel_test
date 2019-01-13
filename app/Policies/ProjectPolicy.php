<?php

namespace App\Policies;

use App\Project;
use App\User;
use Illuminate\Support\Facades\Gate;

use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function update(User $user, Project $project)
    {
        return $project->user_id == $user->id;
    }

    public function before($user)
    {
        if ($user->id == 1) {
            return true;
        }
    }
}
