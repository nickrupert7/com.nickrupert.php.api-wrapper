<?php

namespace Tests\Assets\Api\Processors;

use NickRupert\ApiWrapper\Api\Processor;
use NickRupert\ApiWrapper\Api\Request;
use NickRupert\ApiWrapper\Api\Response;

class BasicPostProcessor extends Processor
{
    public static $called = false;

    public static function handle(Request $request, callable $next): Response
    {
        $response = $next($request);

        static::$called = true;

        return $response;
    }
}