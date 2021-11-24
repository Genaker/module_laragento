<?php

namespace IlluminateNew\Support\Facades;

/**
 * @method static \IlluminateNew\Contracts\View\Factory addNamespace(string $namespace, string|array $hints)
 * @method static \IlluminateNew\Contracts\View\View first(array $views, \IlluminateNew\Contracts\Support\Arrayable|array $data = [], array $mergeData = [])
 * @method static \IlluminateNew\Contracts\View\Factory replaceNamespace(string $namespace, string|array $hints)
 * @method static \IlluminateNew\Contracts\View\Factory addExtension(string $extension, string $engine, \Closure|null $resolver = null)
 * @method static \IlluminateNew\Contracts\View\View file(string $path, array $data = [], array $mergeData = [])
 * @method static \IlluminateNew\Contracts\View\View make(string $view, array $data = [], array $mergeData = [])
 * @method static array composer(array|string $views, \Closure|string $callback)
 * @method static array creator(array|string $views, \Closure|string $callback)
 * @method static bool exists(string $view)
 * @method static mixed share(array|string $key, $value = null)
 *
 * @see \IlluminateNew\View\Factory
 */
class View extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'view';
    }
}
