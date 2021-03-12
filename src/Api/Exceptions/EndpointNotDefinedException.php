<?php

namespace NickRupert\ApiWrapper\Api\Exceptions;

use Throwable;

class EndpointNotDefinedException extends \Exception
{
    public function __construct(string $name)
    {
        parent::__construct("Endpoint '$name' is not defined.");
    }
}