<?php

namespace Neg\Handlers\Events;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;
use Neg\Events\UserWasRegisteredEvent;

class AssignRoleOnSignup implements ShouldQueue
{

    use InteractsWithQueue;

    /**
     * Create the event handler.
     *
     * @param Request $request
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserWasRegisteredEvent $event
     * @return void
     */
    public function handle(UserWasRegisteredEvent $event)
    {
        $user = $event->user;
        $id = 1;
        $user->attachRole($id);
    }
}
