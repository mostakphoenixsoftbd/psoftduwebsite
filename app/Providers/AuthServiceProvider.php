<?php

namespace App\Providers;
// Add as GateContract
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
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
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('isSuperAdmin', function($user){
            return $user->type == 'superadmin';
        });
        $gate->define('isDchairman', function($user){
            return $user->type == 'dchairman';
        });
        $gate->define('isRegistrar', function($user){
            return $user->type == 'registrar';
        });
        $gate->define('isDean', function($user){
            return $user->type == 'dean';
        });
        $gate->define('isDepartment_office', function($user){
            return $user->type == 'department_office';
        });

        //
    }
}
