<?php

namespace App\Providers;

use App\Activity;
use App\Association;
use App\AssociationMember;
use App\Faculty;
use App\Policies\ActivityPolicy;
use App\Policies\AssociationMemberPolicy;
use App\Policies\AssociationPolicy;
use App\Policies\FacultyPolicy;
use App\Policies\UserPolicy;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        User::class=>UserPolicy::class,
        Faculty::class=>FacultyPolicy::class,
        Association::class=>AssociationPolicy::class,
        Activity::class=>ActivityPolicy::class,
        AssociationMember::class=>AssociationMemberPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
