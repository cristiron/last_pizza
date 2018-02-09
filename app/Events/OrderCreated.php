<?php

namespace amuu\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class OrderCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;





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

    /**
     * Create a new event instance.
     *
     * @return void
     */


    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
//     */
//    public function broadcastOn()
//    {
//        return new PrivateChannel('channel-name');
//    }
//}
