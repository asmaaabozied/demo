<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Location;
use Illuminate\Auth\Access\HandlesAuthorization;

class LocationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any countries.
     *
     * @param \App\Models\User|null $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can view the location.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\Location $location
     * @return mixed
     */
    public function view(User $user, Location $location)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can create countries.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the location.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Location $location
     * @return mixed
     */
    public function update(User $user, Location $location)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the location.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Location $location
     * @return mixed
     */
    public function delete(User $user, Location $location)
    {
        return $user->isAdmin();
    }
}
