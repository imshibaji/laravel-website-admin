<?php

namespace Shibaji\Admin\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Shibaji\Admin\Models\Sale\Invoice;

class InvoicePolicy
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
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \Shibaji\Admin\Models\Invoice  $Invoice
     * @return mixed
     */
    public function view(User $user, Invoice $Invoice)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \Shibaji\Admin\Models\Invoice  $Invoice
     * @return mixed
     */
    public function update(User $user, Invoice $Invoice)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \Shibaji\Admin\Models\Invoice  $Invoice
     * @return mixed
     */
    public function delete(User $user, Invoice $Invoice)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \Shibaji\Admin\Models\Invoice  $Invoice
     * @return mixed
     */
    public function restore(User $user, Invoice $Invoice)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \Shibaji\Admin\Models\Invoice  $Invoice
     * @return mixed
     */
    public function forceDelete(User $user, Invoice $Invoice)
    {
        //
    }
}
