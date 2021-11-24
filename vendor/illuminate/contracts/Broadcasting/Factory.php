<?php

namespace IlluminateNew\Contracts\Broadcasting;

interface Factory
{
    /**
     * Get a broadcaster implementation by name.
     *
     * @param  string|null  $name
     * @return \IlluminateNew\Contracts\Broadcasting\Broadcaster
     */
    public function connection($name = null);
}
