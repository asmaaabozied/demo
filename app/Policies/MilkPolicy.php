<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Milk;
use Illuminate\Auth\Access\HandlesAuthorization;

class MilkPolicy
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
     * Determine whether the user can view the Milk.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\Milk H
     * @return mixed
     */
    public function view(User $user, Milk $milk)
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
     * Determine whether the user can update the Milk.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Milk $milk
     * @return mixed
     */
    public function update(User $user, Milk $milk)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the Milk.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Milk $milk
     * @return mixed
     */
    public function delete(User $user, Milk $milk)
    {
        return $user->isAdmin();
    }
}
