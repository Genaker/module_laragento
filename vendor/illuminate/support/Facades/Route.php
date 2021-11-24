<?php

namespace IlluminateNew\Support\Facades;

/**
 * @method static \IlluminateNew\Routing\PendingResourceRegistration apiResource(string $name, string $controller, array $options = [])
 * @method static \IlluminateNew\Routing\PendingResourceRegistration resource(string $name, string $controller, array $options = [])
 * @method static \IlluminateNew\Routing\Route any(string $uri, array|string|callable|null $action = null)
 * @method static \IlluminateNew\Routing\Route|null current()
 * @method static \IlluminateNew\Routing\Route delete(string $uri, array|string|callable|null $action = null)
 * @method static \IlluminateNew\Routing\Route fallback(array|string|callable|null $action = null)
 * @method static \IlluminateNew\Routing\Route get(string $uri, array|string|callable|null $action = null)
 * @method static \IlluminateNew\Routing\Route|null getCurrentRoute()
 * @method static \IlluminateNew\Routing\RouteCollectionInterface getRoutes()
 * @method static \IlluminateNew\Routing\Route match(array|string $methods, string $uri, array|string|callable|null $action = null)
 * @method static \IlluminateNew\Routing\Route options(string $uri, array|string|callable|null $action = null)
 * @method static \IlluminateNew\Routing\Route patch(string $uri, array|string|callable|null $action = null)
 * @method static \IlluminateNew\Routing\Route permanentRedirect(string $uri, string $destination)
 * @method static \IlluminateNew\Routing\Route post(string $uri, array|string|callable|null $action = null)
 * @method static \IlluminateNew\Routing\Route put(string $uri, array|string|callable|null $action = null)
 * @method static \IlluminateNew\Routing\Route redirect(string $uri, string $destination, int $status = 302)
 * @method static \IlluminateNew\Routing\Route substituteBindings(\IlluminateNew\Support\Facades\Route $route)
 * @method static \IlluminateNew\Routing\Route view(string $uri, string $view, array $data = [], int|array $status = 200, array $headers = [])
 * @method static \IlluminateNew\Routing\RouteRegistrar as(string $value)
 * @method static \IlluminateNew\Routing\RouteRegistrar domain(string $value)
 * @method static \IlluminateNew\Routing\RouteRegistrar middleware(array|string|null $middleware)
 * @method static \IlluminateNew\Routing\RouteRegistrar name(string $value)
 * @method static \IlluminateNew\Routing\RouteRegistrar namespace(string|null $value)
 * @method static \IlluminateNew\Routing\RouteRegistrar prefix(string $prefix)
 * @method static \IlluminateNew\Routing\RouteRegistrar where(array $where)
 * @method static \IlluminateNew\Routing\Router|\IlluminateNew\Routing\RouteRegistrar group(\Closure|string|array $attributes, \Closure|string $routes)
 * @method static \IlluminateNew\Routing\ResourceRegistrar resourceVerbs(array $verbs = [])
 * @method static string|null currentRouteAction()
 * @method static string|null currentRouteName()
 * @method static void apiResources(array $resources, array $options = [])
 * @method static void bind(string $key, string|callable $binder)
 * @method static void model(string $key, string $class, \Closure|null $callback = null)
 * @method static void pattern(string $key, string $pattern)
 * @method static void resources(array $resources, array $options = [])
 * @method static void substituteImplicitBindings(\IlluminateNew\Support\Facades\Route $route)
 * @method static boolean uses(...$patterns)
 * @method static boolean is(...$patterns)
 * @method static boolean has(string $name)
 * @method static mixed input(string $key, string|null $default = null)
 *
 * @see \IlluminateNew\Routing\Router
 */
class Route extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'router';
    }
}
