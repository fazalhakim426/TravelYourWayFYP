<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;
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

        Gate::define('customer', function (User $user) {
            return $user->userable_type === "App\Models\Customer";
        });

        Gate::define('agent', function (User $user) {
            return $user->userable_type === "App\Models\Agent";
        });
        
        Gate::define('super-agent', function (User $user) {
            return $user->userable_type === "App\Models\SuperAgent";
        });
        
        if (! $this->app->routesAreCached()) {
            Passport::routes();
        }
    }
}
