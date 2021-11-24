<?php

namespace IlluminateNew\Database\Eloquent\Casts;

use IlluminateNew\Contracts\Database\Eloquent\Castable;
use IlluminateNew\Contracts\Database\Eloquent\CastsAttributes;
use IlluminateNew\Support\Collection;

class AsCollection implements Castable
{
    /**
     * Get the caster class to use when casting from / to this cast target.
     *
     * @param  array  $arguments
     * @return object|string
     */
    public static function castUsing(array $arguments)
    {
        return new class implements CastsAttributes
        {
            public function get($model, $key, $value, $attributes)
            {
                return isset($attributes[$key]) ? new Collection(json_decode($attributes[$key], true)) : null;
            }

            public function set($model, $key, $value, $attributes)
            {
                return [$key => json_encode($value)];
            }
        };
    }
}
