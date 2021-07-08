<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ShippingCompany;
use Illuminate\Auth\Access\HandlesAuthorization;

class ShippingCompanyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any shipping companies.
     *
     * @param \App\Models\User|null $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can view the shipping company.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\ShippingCompany $shipping_company
     * @return mixed
     */
    public function view(User $user, ShippingCompany $shipping_company)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can create shipping companies.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the shipping company.
     *
     * @param \App\Models\User $user
     * @param \App\Models\ShippingCompany $shipping_company
     * @return mixed
     */
    public function update(User $user, ShippingCompany $shipping_company)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the shipping company.
     *
     * @param \App\Models\User $user
     * @param \App\Models\ShippingCompany $shipping_company
     * @return mixed
     */
    public function delete(User $user, ShippingCompany $shipping_company)
    {
        return $user->isAdmin();
    }
}
