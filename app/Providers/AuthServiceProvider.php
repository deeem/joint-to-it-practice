<?php

namespace App\Providers;

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
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('map', function ($user) {
            return $user->hasAccess(['map']);
        });

        Gate::define('dashboard', function ($user) {
            return $user->hasAccess(['dashboard']);
        });

        Gate::define('charts', function ($user) {
            return $user->hasAccess(['charts']);
        });

        Gate::define('components', function ($user) {
            return $user->hasAccess(['components']);
        });

        Gate::define('tables', function ($user) {
            return $user->hasAccess(['tables']);
        });
    }
}
