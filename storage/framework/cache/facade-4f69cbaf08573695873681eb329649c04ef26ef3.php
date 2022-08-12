<?php

namespace Facades\JsonStringfy\JsonStringfy\Services;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JsonStringfy\JsonStringfy\Services\Installer
 */
class Installer extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'JsonStringfy\JsonStringfy\Services\Installer';
    }
}
