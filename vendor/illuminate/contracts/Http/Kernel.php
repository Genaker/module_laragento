<?php

namespace IlluminateNew\Contracts\Http;

interface Kernel
{
    /**
     * Bootstrap the application for HTTP requests.
     *
     * @return void
     */
    public function bootstrap();

    /**
     * Handle an incoming HTTP request.
     *
     * @param  \SymfonyNew\Component\HttpFoundation\Request  $request
     * @return \SymfonyNew\Component\HttpFoundation\Response
     */
    public function handle($request);

    /**
     * Perform any final actions for the request lifecycle.
     *
     * @param  \SymfonyNew\Component\HttpFoundation\Request  $request
     * @param  \SymfonyNew\Component\HttpFoundation\Response  $response
     * @return void
     */
    public function terminate($request, $response);

    /**
     * Get the Laravel application instance.
     *
     * @return \IlluminateNew\Contracts\Foundation\Application
     */
    public function getApplication();
}
