<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Tests\Helpers\SimpleHasher;
use Tymon\JWTAuth\JWTGuard;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ]; 

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        // add custom guard provider
        Auth::provider('user', function (Application $app, array $config) {
            return new UserProvider(new SimpleHasher(), $config['model']);
        });
    }
}
