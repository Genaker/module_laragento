<?php

namespace IlluminateNew\Contracts\Mail;

interface Factory
{
    /**
     * Get a mailer instance by name.
     *
     * @param  string|null  $name
     * @return \IlluminateNew\Contracts\Mail\Mailer
     */
    public function mailer($name = null);
}
