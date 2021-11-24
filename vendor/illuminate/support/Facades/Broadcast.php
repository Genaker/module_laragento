<?php

namespace IlluminateNew\Support\Facades;

use IlluminateNew\Contracts\Broadcasting\Factory as BroadcastingFactoryContract;

/**
 * @method static \IlluminateNew\Broadcasting\Broadcasters\Broadcaster channel(string $channel, callable|string  $callback, array $options = [])
 * @method static mixed auth(\IlluminateNew\Http\Request $request)
 * @method static \IlluminateNew\Contracts\Broadcasting\Broadcaster connection($name = null);
 * @method static void routes(array $attributes = null)
 * @method static \IlluminateNew\Broadcasting\BroadcastManager socket($request = null)
 *
 * @see \IlluminateNew\Contracts\Broadcasting\Factory
 */
class Broadcast extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BroadcastingFactoryContract::class;
    }
}
