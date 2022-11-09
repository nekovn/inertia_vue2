<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
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
    public function boot()
    {
        $this->registerPolicies();

        //nhan vien
        Auth::provider('eloquentUserExAdmin', function ($app, array $config) {
            return new eloquentUserExAdmin($app['hash'], $config['model']);
        });


        //khach hang
        Auth::provider('eloquentUserExMember', function ($app, array $config) {
            return new EloquentUserExMemberProvider($app['hash'], $config['model']);
        });
    }
}
