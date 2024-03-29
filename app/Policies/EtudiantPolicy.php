<?php

namespace App\Policies;

use App\Models\Etudiant;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class EtudiantPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return in_array($user->role->libelle, ["Admin","Responsable pédagogique","Super admin"]);
    }



    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user): bool
    {
        return $user->role->libelle == "Admin";
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return in_array($user->role->libelle, ["Admin", "Responsable pédagogique"]);
    }

    public function viewEtudiantByEcole(User $user): bool
    {
        return in_array($user->role->libelle, ["Admin", "Responsable pédagogique","Super admin"]);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user): bool
    {
        return $user->role->libelle == "Admin";
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user): bool
    {
        return $user->role->libelle == "Admin";
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user): bool
    {
        return $user->role->libelle == "Admin";
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user): bool
    {
        return $user->role->libelle == "Admin";
    }
}
