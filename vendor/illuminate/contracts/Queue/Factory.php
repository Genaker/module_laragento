<?php

namespace IlluminateNew\Contracts\Queue;

interface Factory
{
    /**
     * Resolve a queue connection instance.
     *
     * @param  string|null  $name
     * @return \IlluminateNew\Contracts\Queue\Queue
     */
    public function connection($name = null);
}
