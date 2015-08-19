<?php

namespace Neg\Handlers\Events;

use Confide;
use Neg\Events\UserWasLoggedInEvent;

class UserLastLogin
{
    /**
     * Create the event handler.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserWasLoggedInEvent $event
     * @return void
     */
    public function handle(UserWasLoggedInEvent $event)
    {
        Confide::user()->last_login = new \DateTime();
        Confide::user()->save();
    }
}
