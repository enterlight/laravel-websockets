<?php

namespace Enterlight\LaravelWebSockets\Facades;

use Enterlight\LaravelWebSockets\Statistics\Logger\StatisticsLogger as StatisticsLoggerInterface;
use Illuminate\Support\Facades\Facade;

/** @see \Enterlight\LaravelWebSockets\Statistics\Logger\HttpStatisticsLogger */
class StatisticsLogger extends Facade
{
    protected static function getFacadeAccessor()
    {
        return StatisticsLoggerInterface::class;
    }
}
