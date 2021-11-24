<?php

namespace IlluminateNew\Support\Facades;

/**
 * @method static \IlluminateNew\Http\RedirectResponse action(string $action, array $parameters = [], int $status = 302, array $headers = [])
 * @method static \IlluminateNew\Http\RedirectResponse away(string $path, int $status = 302, array $headers = [])
 * @method static \IlluminateNew\Http\RedirectResponse back(int $status = 302, array $headers = [], $fallback = false)
 * @method static \IlluminateNew\Http\RedirectResponse guest(string $path, int $status = 302, array $headers = [], bool $secure = null)
 * @method static \IlluminateNew\Http\RedirectResponse home(int $status = 302)
 * @method static \IlluminateNew\Http\RedirectResponse intended(string $default = '/', int $status = 302, array $headers = [], bool $secure = null)
 * @method static \IlluminateNew\Http\RedirectResponse refresh(int $status = 302, array $headers = [])
 * @method static \IlluminateNew\Http\RedirectResponse route(string $route, array $parameters = [], int $status = 302, array $headers = [])
 * @method static \IlluminateNew\Http\RedirectResponse secure(string $path, int $status = 302, array $headers = [])
 * @method static \IlluminateNew\Http\RedirectResponse signedRoute(string $name, array $parameters = [], \DateTimeInterface|\DateInterval|int $expiration = null, int $status = 302, array $headers = [])
 * @method static \IlluminateNew\Http\RedirectResponse temporarySignedRoute(string $name, \DateTimeInterface|\DateInterval|int $expiration, array $parameters = [], int $status = 302, array $headers = [])
 * @method static \IlluminateNew\Http\RedirectResponse to(string $path, int $status = 302, array $headers = [], bool $secure = null)
 * @method static \IlluminateNew\Routing\UrlGenerator getUrlGenerator()
 * @method static void setSession(\IlluminateNew\Session\Store $session)
 * @method static void setIntendedUrl(string $url)
 *
 * @see \IlluminateNew\Routing\Redirector
 */
class Redirect extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'redirect';
    }
}
