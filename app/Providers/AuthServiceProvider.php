<?php

namespace App\Providers;

use App\Policies\UserPolicy;
use Illuminate\Support\Facades\Gate;
use \App\Models\User;
use \App\Models\Status;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
         'App\Models' => 'App\Policies\ModelPolicy',
        User::class  => \App\Policies\UserPolicy::class,
        Status::class => \App\Policies\StatusPolicy::class,


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
    }
}
