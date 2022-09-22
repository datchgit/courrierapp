<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
        $this->registerPolicies();

        Gate::define('is_agcourrier', function (User $user) {
            return strtolower($user->service->nom) == 'service courrier';
        });

        Gate::define('is_admin', function (User $user) {
            return strtolower($user->poste->role->nom) == 'super-admin';
        });

        Gate::define('is_secretariat_drh', function (User $user) {
            return strtolower($user->poste->nom) == strtolower('secretaire drh') && strtoupper($user->service->nom) == strtoupper('SECRETARIAT');
        });

        
        //
    }
}
