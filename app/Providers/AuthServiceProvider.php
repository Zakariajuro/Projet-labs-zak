<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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
        $this->registerPolicies();

        Gate::define("adWebMaster", function(User $user){
            if ($user->role_id == 1 || $user->role_id == 2) {
                return true;
            }
        });
        Gate::define("red", function(User $user){
            if ($user->role_id == 1 ||  $user->role_id == 2 || $user->role_id == 3) {
                return true;
            }
        });
        
    }
}
