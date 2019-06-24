<?php

namespace App\Providers;

use App\AssociationMember;
use App\Faculty;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Auth\Access\HandlesAuthorization;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
        // ...
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $faculties = Faculty::all();
        view()->share('faculties', $faculties);
        view()->composer('*', function($view)
        {
            if (Auth::check()) {
                $members = AssociationMember::where('user_id', '=', Auth::user()->id)->get();
                view()->share('members', $members);
            }
        });


    }
}
