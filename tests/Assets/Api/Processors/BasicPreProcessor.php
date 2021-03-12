<?php

namespace Tests\Assets\Api\Processors;

use NickRupert\ApiWrapper\Api\Processor;
use NickRupert\ApiWrapper\Api\Request;
use NickRupert\ApiWrapper\Api\Response;

class BasicPreProcessor extends Processor
{
    public static $called = false;

    public static function handle(Request $request, callable $next): Response
    {
        static::$called = true;

        return $next($request);
    }
}