<?php

namespace IlluminateNew\Contracts\Broadcasting;

interface ShouldBroadcast
{
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \IlluminateNew\Broadcasting\Channel|\IlluminateNew\Broadcasting\Channel[]|string[]|string
     */
    public function broadcastOn();
}
