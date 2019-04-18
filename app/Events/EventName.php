<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class EventName implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $data;

    public function __construct()
    {
        //
    }

    public function broadcastOn()
    {
        return ['test-channel'];
    }

    public function broadcastWith()
    {
        return [
            'content' => 'has 1 new message',
            'power'=> 1
        ];
    }

    public function broadcastAs()
    {
        return 'messageSent';
    }
}
