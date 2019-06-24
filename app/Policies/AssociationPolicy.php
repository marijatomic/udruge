<?php

namespace App\Policies;

use App\User;
use App\Association;
use Illuminate\Auth\Access\HandlesAuthorization;

class AssociationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the association.
     *
     * @param  \App\User  $user
     * @param  \App\Association  $association
     * @return mixed
     */
    public function view(User $user, Association $association)
    {
        //
    }

    /**
     * Determine whether the user can create associations.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if(auth()->user()->type == 'admin'){
            return true;
        }
    }

    /**
     * Determine whether the user can update the association.
     *
     * @param  \App\User  $user
     * @param  \App\Association  $association
     * @return mixed
     */
    public function update(User $user, Association $association)
    {
        if(auth()->user()->type === 'admin' || auth()->user()->id === $association->president_id){
            return true;
        }
    }

    /**
     * Determine whether the user can delete the association.
     *
     * @param  \App\User  $user
     * @param  \App\Association  $association
     * @return mixed
     */
    public function delete(User $user, Association $association)
    {
        if(auth()->user()->type === 'admin'){
            return true;
        }
    }

    /**
     * Determine whether the user can restore the association.
     *
     * @param  \App\User  $user
     * @param  \App\Association  $association
     * @return mixed
     */
    public function restore(User $user, Association $association)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the association.
     *
     * @param  \App\User  $user
     * @param  \App\Association  $association
     * @return mixed
     */
    public function forceDelete(User $user, Association $association)
    {
        //
    }

    //samo admin i predsjednik udruge mogu dodati novog clana i novu aktivnost
    public function addMemberAndActivity(User $user,Association $association){
        if(auth()->user()->type === 'admin' || auth()->user()->id === $association->president_id){
            return true;
        }
    }

}
