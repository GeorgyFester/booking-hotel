<?php

namespace App\Policies;

use App\Models\Hotel;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class HotelPolicy
{
    public function viewAny(?User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(?User $user, Hotel $hotel): bool
    {
        return true;
    }

    public function viewRooms(?User $user, Hotel $hotel): Response|bool
    {
        return $this->view($user, $hotel);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(?User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(?User $user, Hotel $hotel): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(?User $user, Hotel $hotel): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(?User $user, Hotel $hotel): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(?User $user, Hotel $hotel): bool
    {
        //
    }
}
