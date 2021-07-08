<?php

namespace App\Policies;

use App\Models\Area;
use App\Models\User;
use App\Models\Governorate;
use Illuminate\Auth\Access\HandlesAuthorization;

class AreaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Area $area
     * @param \App\Models\Governorate $governorate
     * @return mixed
     */
    public function view(User $user, Area $area, Governorate $governorate)
    {
        return $user->isAdmin() && $governorate->is($area->governorate);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Area $area
     * @param \App\Models\Governorate $governorate
     * @return mixed
     */
    public function update(User $user, Area $area, Governorate $governorate)
    {
        return $user->isAdmin() && $governorate->is($area->governorate);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Area $area
     * @param \App\Models\Governorate $governorate
     * @return mixed
     */
    public function delete(User $user, Area $area, Governorate $governorate)
    {
        return $user->isAdmin() && $governorate->is($area->governorate);
    }
}
