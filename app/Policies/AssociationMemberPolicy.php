<?php

namespace App\Policies;


use App\Association;
use App\User;
use App\AssociationMember;
use Illuminate\Auth\Access\HandlesAuthorization;

class AssociationMemberPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the association member.
     *
     * @param  \App\User $user
     * @param  \App\AssociationMember $associationMember
     * @return mixed
     */
    public function view(User $user, AssociationMember $associationMember)
    {
        //
    }

    /**
     * Determine whether the user can create association members.
     *
     * @param  \App\User $user
     * @return mixed
     */
    public function create(Association $association)
    {
        if(auth()->user()->type === 'admin' || auth()->user()->id === $association->president_id){
            return true;
        }
    }

    /**
     * Determine whether the user can update the association member.
     *
     * @param  \App\User $user
     * @param  \App\AssociationMember $associationMember
     * @return mixed
     */
    public function update(User $user, AssociationMember $associationMember)
    {
        //
    }

    /**
     * Determine whether the user can delete the association member.
     *
     * @param  \App\User $user
     * @param  \App\AssociationMember $associationMember
     * @return mixed
     */
    public function delete(User $user, AssociationMember $associationMember)
    {

    }

    /**
     * Determine whether the user can restore the association member.
     *
     * @param  \App\User $user
     * @param  \App\AssociationMember $associationMember
     * @return mixed
     */
    public function restore(User $user, AssociationMember $associationMember)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the association member.
     *
     * @param  \App\User $user
     * @param  \App\AssociationMember $associationMember
     * @return mixed
     */
    public function forceDelete(User $user, AssociationMember $associationMember)
    {
        //
    }


}
