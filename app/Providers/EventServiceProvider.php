<?php

namespace Neg\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Neg\Events\UserWasLoggedInEvent;
use Neg\Events\UserWasRegisteredEvent;
use Neg\Handlers\Events\AssignRoleOnSignup;
use Neg\Handlers\Events\EmailSignupConfirmation;
use Neg\Handlers\Events\UserLastLogin;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        UserWasRegisteredEvent::class => [
            AssignRoleOnSignup::class,
            EmailSignupConfirmation::class,
        ],
        UserWasLoggedInEvent::class => [
            UserLastLogin::class
        ]
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        //
    }
}
