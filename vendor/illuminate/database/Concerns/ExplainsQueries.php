<?php

namespace IlluminateNew\Database\Concerns;

use IlluminateNew\Support\Collection;

trait ExplainsQueries
{
    /**
     * Explains the query.
     *
     * @return \IlluminateNew\Support\Collection
     */
    public function explain()
    {
        $sql = $this->toSql();

        $bindings = $this->getBindings();

        $explanation = $this->getConnection()->select('EXPLAIN '.$sql, $bindings);

        return new Collection($explanation);
    }
}
