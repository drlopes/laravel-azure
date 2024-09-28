<?php

namespace DRLopes\LaravelAzure\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DRLopes\LaravelAzure\LaravelAzure
 */
class LaravelAzure extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \DRLopes\LaravelAzure\LaravelAzure::class;
    }
}
