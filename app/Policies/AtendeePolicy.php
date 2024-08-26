<?php

namespace App\Policies;

use App\Models\Atendee;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AtendeePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(?User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(?User $user, Atendee $atendee): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Atendee $atendee): bool
    {
        return $user->id === $atendee->event()->user_id ||
            $user->id === $atendee->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Atendee $atendee): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Atendee $atendee): bool
    {
        //
    }
}
