<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Collection;
use Illuminate\Auth\Access\HandlesAuthorization;

class CollectionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any collections.
     *
     * @param \App\Models\User|null $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can view the collection.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\Collection $collection
     * @return mixed
     */
    public function view(User $user, Collection $collection)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can create collections.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the collection.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Collection $collection
     * @return mixed
     */
    public function update(User $user, Collection $collection)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the collection.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Collection $collection
     * @return mixed
     */
    public function delete(User $user, Collection $collection)
    {
        return $user->isAdmin();
    }
}
