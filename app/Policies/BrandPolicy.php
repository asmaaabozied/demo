<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Brand;
use Illuminate\Auth\Access\HandlesAuthorization;

class BrandPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any brands.
     *
     * @param \App\Models\User|null $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can view the brand.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\Brand $brand
     * @return mixed
     */
    public function view(User $user, Brand $brand)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can create brands.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the brand.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Brand $brand
     * @return mixed
     */
    public function update(User $user, Brand $brand)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the brand.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Brand $brand
     * @return mixed
     */
    public function delete(User $user, Brand $brand)
    {
        return $user->isAdmin();
    }
}
