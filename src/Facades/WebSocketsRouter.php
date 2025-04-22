<?php

namespace Enterlight\LaravelWebSockets\Facades;

use Illuminate\Support\Facades\Facade;

/** @see \Enterlight\LaravelWebSockets\Server\Router */
class WebSocketsRouter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'websockets.router';
    }
}
