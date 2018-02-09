<?php

namespace amuu\Listeners;

use amuu\Events\ExampleEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use \Illuminate\Support\Facades\Log;
class ExampleEventHandler
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
     * @param  ExampleEvent  $event
     * @return void
     */
    public function handle(ExampleEvent $event)
    {	log::debug('Event::fire(new ExampleEvent($msg)) in NewOrderController which runs the listener ExampleEventHandler handler function of ExampleEvent');
        log::debug($event->getMessage());
        //
    }
}
