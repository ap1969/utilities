<?php

namespace Notifium\Utilities\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Notifium\Utilities\Utilities
 */
class Utilities extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Notifium\Utilities\Utilities::class;
    }
}
