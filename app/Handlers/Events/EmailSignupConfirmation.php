<?php

namespace Neg\Handlers\Events;

use Config;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Lang;
use Mail;
use Neg\Events\UserWasRegisteredEvent;

class EmailSignupConfirmation implements ShouldQueue
{
    use InteractsWithQueue;

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
     * @param  UserWasRegisteredEvent $event
     * @return void
     */
    public function handle(UserWasRegisteredEvent $event)
    {
        if (true) {
            $this->release(30);
        }

        $user = $event->user;

        if (Config::get('confide.signup_email')) {
            Mail::queueOn(
                Config::get('confide.email_queue'),
                Config::get('confide.email_account_confirmation'),
                compact('user'),
                function ($message) use ($user) {
                    $message
                        ->to($user->email, $user->username)
                        ->subject(Lang::get('confide.email.account_confirmation.subject'));
                }
            );
        }
    }
}
