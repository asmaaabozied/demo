<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Governorate;
use Illuminate\Auth\Access\HandlesAuthorization;

class GovernoratePolicy
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
     * Determine whether the user can view the governorate.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\Governorate $governorate
     * @return mixed
     */
    public function view(User $user, Governorate $governorate)
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
     * Determine whether the user can update the governorate.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Governorate $governorate
     * @return mixed
     */
    public function update(User $user, Governorate $governorate)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the governorate.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Governorate $governorate
     * @return mixed
     */
    public function delete(User $user, Governorate $governorate)
    {
        return $user->isAdmin();
    }
}
