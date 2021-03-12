<?php

namespace Tests\TestCases\Unit;

use NickRupert\ApiWrapper\Api\Endpoint;
use NickRupert\ApiWrapper\Api\Route;
use NickRupert\ApiWrapper\ApiWrapper;
use PHPUnit\Framework\TestCase;

class ApiWrapperTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testLoad()
    {
        ApiWrapper::load(__DIR__ . '/../../Assets/routes/test.php');

        $route = Route::find('file.test');
        $this->assertInstanceOf(Endpoint::class, $route);
    }
}