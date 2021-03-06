<?php

namespace NickRupert\ApiWrapper\Api;

abstract class Processor
{
    public abstract static function handle(Request $request, callable $next): Response;
}