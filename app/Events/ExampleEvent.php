<?php

namespace amuu\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ExampleEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

//class ExampleEvent extends Event {
//
//    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */

    private $message;

    public function __construct($msg)
    {
        //
        $this->message = $msg;
    }

    public function getMessage(){
        return $this->message;
    }

}

//public function broadcastOn()
//    {
//        return new PrivateChannel('channel-name');
//    }
//}
