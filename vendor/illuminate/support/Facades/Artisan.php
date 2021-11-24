<?php

namespace IlluminateNew\Support\Facades;

use IlluminateNew\Contracts\Console\Kernel as ConsoleKernelContract;

/**
 * @method static \IlluminateNew\Foundation\Bus\PendingDispatch queue(string $command, array $parameters = [])
 * @method static \IlluminateNew\Foundation\Console\ClosureCommand command(string $command, callable $callback)
 * @method static array all()
 * @method static int call(string $command, array $parameters = [], \SymfonyNew\Component\Console\Output\OutputInterface|null $outputBuffer = null)
 * @method static int handle(\SymfonyNew\Component\Console\Input\InputInterface $input, \SymfonyNew\Component\Console\Output\OutputInterface|null $output = null)
 * @method static string output()
 * @method static void terminate(\SymfonyNew\Component\Console\Input\InputInterface $input, int $status)
 *
 * @see \IlluminateNew\Contracts\Console\Kernel
 */
class Artisan extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ConsoleKernelContract::class;
    }
}
