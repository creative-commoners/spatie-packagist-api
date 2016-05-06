<?php

namespace Spatie\PackagistApi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spatie\Skeleton\SkeletonClass
 */
class PackagistApiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'skeleton';
    }
}