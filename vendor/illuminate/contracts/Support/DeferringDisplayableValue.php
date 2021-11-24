<?php

namespace IlluminateNew\Contracts\Support;

interface DeferringDisplayableValue
{
    /**
     * Resolve the displayable value that the class is deferring.
     *
     * @return \IlluminateNew\Contracts\Support\Htmlable|string
     */
    public function resolveDisplayableValue();
}
