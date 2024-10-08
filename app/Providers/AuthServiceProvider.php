<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Atendee;
use App\Models\Event;
use App\Policies\AtendeePolicy;
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
        Atendee::class => AtendeePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
//        Gate::define('update-event', function ($user, Event $event) {
//            return $user->id === $event->user_id;
//        });
//
//        Gate::define('delete-attendee', function ($user, Event $event, Atendee $atendee) {
//            return $user->id === $event->user_id ||
//                   $user->id === $atendee->user_id;
//        });
    }
}
