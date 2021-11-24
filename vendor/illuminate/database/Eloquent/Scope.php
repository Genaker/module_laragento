<?php

namespace IlluminateNew\Database\Eloquent;

interface Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \IlluminateNew\Database\Eloquent\Builder  $builder
     * @param  \IlluminateNew\Database\Eloquent\Model  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model);
}
