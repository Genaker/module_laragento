<?php

namespace IlluminateNew\Contracts\Cache;

interface Factory
{
    /**
     * Get a cache store instance by name.
     *
     * @param  string|null  $name
     * @return \IlluminateNew\Contracts\Cache\Repository
     */
    public function store($name = null);
}
