<?php

namespace IlluminateNew\Support\Facades;

/**
 * @method static \IlluminateNew\Cache\TaggedCache tags(array|mixed $names)
 * @method static \IlluminateNew\Contracts\Cache\Lock lock(string $name, int $seconds = 0, mixed $owner = null)
 * @method static \IlluminateNew\Contracts\Cache\Lock restoreLock(string $name, string $owner)
 * @method static \IlluminateNew\Contracts\Cache\Repository  store(string|null $name = null)
 * @method static \IlluminateNew\Contracts\Cache\Store getStore()
 * @method static bool add(string $key, $value, \DateTimeInterface|\DateInterval|int $ttl = null)
 * @method static bool flush()
 * @method static bool forever(string $key, $value)
 * @method static bool forget(string $key)
 * @method static bool has(string $key)
 * @method static bool missing(string $key)
 * @method static bool put(string $key, $value, \DateTimeInterface|\DateInterval|int $ttl = null)
 * @method static int|bool decrement(string $key, $value = 1)
 * @method static int|bool increment(string $key, $value = 1)
 * @method static mixed get(string $key, mixed $default = null)
 * @method static mixed pull(string $key, mixed $default = null)
 * @method static mixed remember(string $key, \DateTimeInterface|\DateInterval|int $ttl, \Closure $callback)
 * @method static mixed rememberForever(string $key, \Closure $callback)
 * @method static mixed sear(string $key, \Closure $callback)
 *
 * @see \IlluminateNew\Cache\CacheManager
 * @see \IlluminateNew\Cache\Repository
 */
class Cache extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cache';
    }
}