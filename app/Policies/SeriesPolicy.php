<?php

namespace App\Policies;

use App\Series;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SeriesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasRole('moderator');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Series  $series
     * @return mixed
     */
    public function view(User $user, Series $series)
    {
        return $user->hasRole('moderator');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasRole('moderator');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Series  $series
     * @return mixed
     */
    public function update(User $user, Series $series)
    {
        return $user->hasRole('moderator');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Series  $series
     * @return mixed
     */
    public function delete(User $user, Series $series)
    {
        return $user->hasRole('moderator');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Series  $series
     * @return mixed
     */
    public function restore(User $user, Series $series)
    {
        return $user->hasRole('moderator');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Series  $series
     * @return mixed
     */
    public function forceDelete(User $user, Series $series)
    {
        return $user->hasRole('moderator');
    }
}
