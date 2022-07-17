<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define("isSuperadmin", function () {
            return Auth::user()->permission === "superadmin";
        });

        Gate::define("isCyber", function () {
            return Auth::user()->permission === "cyber";
        });

        Gate::define("isCreator", function () {
            return Auth::user()->permission === "creator";
        });

        Gate::define("isAsaysh", function () {
            return Auth::user()->permission === "asaysh";
        });
    }
}
