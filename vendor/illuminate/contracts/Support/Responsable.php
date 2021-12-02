<?php

namespace IlluminateNew\Contracts\Support;

interface Responsable
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \IlluminateNew\Http\Request  $request
     * @return \SymfonyNew\Component\HttpFoundation\Response
     */
    public function toResponse($request);
}
