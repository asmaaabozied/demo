<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Classification;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClassificationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any classifications.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can view the classification.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Classification $classification
     * @return mixed
     */
    public function view(User $user, Classification $classification)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can create classifications.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the classification.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Classification $classification
     * @return mixed
     */
    public function update(User $user, Classification $classification)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the classification.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Classification $classification
     * @return mixed
     */
    public function delete(User $user, Classification $classification)
    {
        return $user->isAdmin();
    }
}
