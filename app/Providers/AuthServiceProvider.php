<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
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

        //

        // Gate::define('update-conversation', function (User $user, Conversation $conversation) {
        //     return $conversation->user->is($user);
        // });

        // Gate::before(function (User $user) {
        //     if ($user->id == 11) { //admin
        //         return true;
        //     }
        // });

        Gate::before(function ($user, $ability) {
            return $user->abilities()->contains($ability);
        });
    }
}
