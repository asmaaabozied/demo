<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ShippingPrice;
use Illuminate\Auth\Access\HandlesAuthorization;

class ShippingPricePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any shipping prices.
     *
     * @param \App\Models\User|null $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can view the shipping price.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\ShippingPrice $shipping_price
     * @return mixed
     */
    public function view(User $user, ShippingPrice $shipping_price)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can create shipping prices.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the shipping price.
     *
     * @param \App\Models\User $user
     * @param \App\Models\ShippingPrice $shipping_price
     * @return mixed
     */
    public function update(User $user, ShippingPrice $shipping_price)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the shipping price.
     *
     * @param \App\Models\User $user
     * @param \App\Models\ShippingPrice $shipping_price
     * @return mixed
     */
    public function delete(User $user, ShippingPrice $shipping_price)
    {
        return $user->isAdmin();
    }
}
