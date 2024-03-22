<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {

        Gate::define('admin', function(User $user){
            return $user->level == 'Admin';
        });
        Gate::define('petugas', function(User $user){
            return Auth()->User()->level != 'Customer';
        });
        Gate::define('customer', function(User $user){
            return $user->level == 'Customer';
        });
        $this->registerPolicies();

        //
    }
}
