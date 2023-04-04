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

    public function view(?User $user, Hotel $hotel): bool
    {
        return true;
    }

    public function viewRooms(?User $user, Hotel $hotel): Response|bool
    {
        return $this->view($user, $hotel);
    }

    public function create(?User $user): bool
    {
        //
    }

    public function update(?User $user, Hotel $hotel): bool
    {
        //
    }

    public function delete(?User $user, Hotel $hotel): bool
    {
        //
    }

    public function restore(?User $user, Hotel $hotel): bool
    {
        //
    }

    public function forceDelete(?User $user, Hotel $hotel): bool
    {
        //
    }
}
