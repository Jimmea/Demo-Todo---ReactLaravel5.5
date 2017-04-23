<?php

namespace App\Listeners;

use App\Events\UserHasRegisterd;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class Email
{
    /**
     * Create the event listener.
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
     * @param  UserHasRegisterd  $event
     * @return void
     */
    public function welcome(UserHasRegisterd $event)
    {
        var_dump("The user " . $event->name . ' :  registerd');
    }
}
