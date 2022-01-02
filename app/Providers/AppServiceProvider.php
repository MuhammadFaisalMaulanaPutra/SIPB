<?php

namespace App\Providers;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
        Gate::define('admin', function(User $user){
            return $user->role->id === 1;
        });

        Gate::define('petugas', function(User $user){
            return $user->role->id === 2;
        });

        Gate::define('adminpetugas', function(User $user){
            return $user->role->id !== 3;
        });
    }
}
