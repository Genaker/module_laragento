<?php

namespace IlluminateNew\Contracts\Support;

interface MessageProvider
{
    /**
     * Get the messages for the instance.
     *
     * @return \IlluminateNew\Contracts\Support\MessageBag
     */
    public function getMessageBag();
}
