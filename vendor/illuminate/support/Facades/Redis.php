<?php

namespace IlluminateNew\Support\Facades;

/**
 * @method static \IlluminateNew\Redis\Connections\Connection connection(string $name = null)
 * @method static \IlluminateNew\Redis\Limiters\ConcurrencyLimiterBuilder funnel(string $name)
 * @method static \IlluminateNew\Redis\Limiters\DurationLimiterBuilder throttle(string $name)
 *
 * @see \IlluminateNew\Redis\RedisManager
 * @see \IlluminateNew\Contracts\Redis\Factory
 */
class Redis extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'redis';
    }
}
