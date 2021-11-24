<?php

namespace IlluminateNew\Support\Facades;

use IlluminateNew\Notifications\AnonymousNotifiable;
use IlluminateNew\Notifications\ChannelManager;
use IlluminateNew\Support\Testing\Fakes\NotificationFake;

/**
 * @method static \IlluminateNew\Notifications\ChannelManager locale(string|null $locale)
 * @method static \IlluminateNew\Support\Collection sent(mixed $notifiable, string $notification, callable $callback = null)
 * @method static bool hasSent(mixed $notifiable, string $notification)
 * @method static mixed channel(string|null $name = null)
 * @method static void assertNotSentTo(mixed $notifiable, string|\Closure $notification, callable $callback = null)
 * @method static void assertNothingSent()
 * @method static void assertSentOnDemand(string|\Closure $notification, callable $callback = null)
 * @method static void assertSentTo(mixed $notifiable, string|\Closure $notification, callable $callback = null)
 * @method static void assertSentOnDemandTimes(string $notification, int $times = 1)
 * @method static void assertSentToTimes(mixed $notifiable, string $notification, int $times = 1)
 * @method static void assertTimesSent(int $expectedCount, string $notification)
 * @method static void send(\IlluminateNew\Support\Collection|array|mixed $notifiables, $notification)
 * @method static void sendNow(\IlluminateNew\Support\Collection|array|mixed $notifiables, $notification)
 *
 * @see \IlluminateNew\Notifications\ChannelManager
 */
class Notification extends Facade
{
    /**
     * Replace the bound instance with a fake.
     *
     * @return \IlluminateNew\Support\Testing\Fakes\NotificationFake
     */
    public static function fake()
    {
        static::swap($fake = new NotificationFake);

        return $fake;
    }

    /**
     * Begin sending a notification to an anonymous notifiable.
     *
     * @param  string  $channel
     * @param  mixed  $route
     * @return \IlluminateNew\Notifications\AnonymousNotifiable
     */
    public static function route($channel, $route)
    {
        return (new AnonymousNotifiable)->route($channel, $route);
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ChannelManager::class;
    }
}
