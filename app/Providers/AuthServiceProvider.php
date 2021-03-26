<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Homes;

use App\Policies\HomePolicy;
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
        // 'App\Models\Homes' => 'App\Policies\HomePolicy',
        Homes::class => HomePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        \Gate::define('update-home', function($user, $home){
            return $user->id == $home->user_id;
        });

        \Gate::define('delete-home', function($user, $home){
            return $user->id == $home->user_id;
        });
    }
}
