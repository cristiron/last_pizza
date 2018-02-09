<?php

namespace amuu\Listeners;

use amuu\Events\UserLoggedIn;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Storage;
use \Illuminate\Support\Facades\Log;
class WriteMessageToFile
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
     * @param  UserLoggedIn  $event
     * @return void
     */
    public function handle(UserLoggedIn $event)
    {$message = $event->request->user()->name . ' just logged in to the application.';
        Storage::append('loginactivity.txt', $message);
        log::debug($message);

        //
    }
}
