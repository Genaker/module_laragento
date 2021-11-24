<?php

namespace IlluminateNew\Support\Facades;

use IlluminateNew\Contracts\Routing\ResponseFactory as ResponseFactoryContract;

/**
 * @method static \IlluminateNew\Http\JsonResponse json(string|array $data = [], int $status = 200, array $headers = [], int $options = 0)
 * @method static \IlluminateNew\Http\JsonResponse jsonp(string $callback, string|array $data = [], int $status = 200, array $headers = [], int $options = 0)
 * @method static \IlluminateNew\Http\RedirectResponse redirectGuest(string $path, int $status = 302, array $headers = [], bool|null $secure = null)
 * @method static \IlluminateNew\Http\RedirectResponse redirectTo(string $path, int $status = 302, array $headers = [], bool|null $secure = null)
 * @method static \IlluminateNew\Http\RedirectResponse redirectToAction(string $action, mixed $parameters = [], int $status = 302, array $headers = [])
 * @method static \IlluminateNew\Http\RedirectResponse redirectToIntended(string $default = '/', int $status = 302, array $headers = [], bool|null $secure = null)
 * @method static \IlluminateNew\Http\RedirectResponse redirectToRoute(string $route, mixed $parameters = [], int $status = 302, array $headers = [])
 * @method static \IlluminateNew\Http\Response make(array|string $content = '', int $status = 200, array $headers = [])
 * @method static \IlluminateNew\Http\Response noContent($status = 204, array $headers = [])
 * @method static \IlluminateNew\Http\Response view(string $view, array $data = [], int $status = 200, array $headers = [])
 * @method static \SymfonyNew\Component\HttpFoundation\BinaryFileResponse download(\SplFileInfo|string $file, string|null $name = null, array $headers = [], string|null $disposition = 'attachment')
 * @method static \SymfonyNew\Component\HttpFoundation\BinaryFileResponse file($file, array $headers = [])
 * @method static \SymfonyNew\Component\HttpFoundation\StreamedResponse stream(\Closure $callback, int $status = 200, array $headers = [])
 * @method static \SymfonyNew\Component\HttpFoundation\StreamedResponse streamDownload(\Closure $callback, string|null $name = null, array $headers = [], string|null $disposition = 'attachment')
 *
 * @see \IlluminateNew\Contracts\Routing\ResponseFactory
 */
class Response extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ResponseFactoryContract::class;
    }
}
