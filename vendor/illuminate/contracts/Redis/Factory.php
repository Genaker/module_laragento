<?php

namespace IlluminateNew\Contracts\Redis;

interface Factory
{
    /**
     * Get a Redis connection by name.
     *
     * @param  string|null  $name
     * @return \IlluminateNew\Redis\Connections\Connection
     */
    public function connection($name = null);
}
