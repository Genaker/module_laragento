<?php

namespace IlluminateNew\Contracts\Validation;

interface ValidatorAwareRule
{
    /**
     * Set the current validator.
     *
     * @param  \IlluminateNew\Validation\Validator  $validator
     * @return $this
     */
    public function setValidator($validator);
}
