<?php

namespace amuu\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Log;
use amuu\Events\OrderCreated;
use Illuminate\Support\Facades\DB;
class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'amuu\Events\Event' => [
            'amuu\Listeners\EventListener',],
        'amuu\Events\ExampleEvent' => [ 'amuu\Listeners\ExampleEventHandler'],
        'amuu\Events\UserLoggedIn' => [
            'amuu\Listeners\WriteMessageToFile',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Event::listen('amuu\Events\OrderCreated', function(OrderCreated $event)
        {
            // Handle the event...
            Log::debug('Provider EventServiceProvider::boot with  Event::listen of amuu\Events\OrderCreated,  fired by Event::fire(new OrderCreated($msg) in NewOrderController ');
            Log::debug($event->getMessage());

        });

        DB::listen(function ($query) {
            Log::debug($query->sql);
            Log::debug($query->bindings);
            Log::debug($query->time);
        });

    }
}
