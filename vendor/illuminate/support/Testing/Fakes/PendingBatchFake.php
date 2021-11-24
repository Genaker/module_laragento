<?php

namespace IlluminateNew\Support\Testing\Fakes;

use IlluminateNew\Bus\PendingBatch;
use IlluminateNew\Support\Collection;

class PendingBatchFake extends PendingBatch
{
    /**
     * The fake bus instance.
     *
     * @var \IlluminateNew\Support\Testing\Fakes\BusFake
     */
    protected $bus;

    /**
     * Create a new pending batch instance.
     *
     * @param  \IlluminateNew\Support\Testing\Fakes\BusFake  $bus
     * @param  \IlluminateNew\Support\Collection  $jobs
     * @return void
     */
    public function __construct(BusFake $bus, Collection $jobs)
    {
        $this->bus = $bus;
        $this->jobs = $jobs;
    }

    /**
     * Dispatch the batch.
     *
     * @return \IlluminateNew\Bus\Batch
     */
    public function dispatch()
    {
        return $this->bus->recordPendingBatch($this);
    }
}
