<?php

namespace Chameleon\MatomoTracker\Facades;

use Illuminate\Support\Facades\Facade;

/** @see \Chameleon\MatomoTracker\LaravelMatomoTracker */
class LaravelMatomoTracker extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelmatomotracker';
    }
}
