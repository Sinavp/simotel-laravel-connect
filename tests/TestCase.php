<?php

namespace Nasim\LaraSimotel\Tests;

use Nasim\LaraSimotel\SimotelLaravelServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            SimotelLaravelServiceProvider::class
        ];
    }

    protected function getEnvironmentSetUp($app)
    {

    }
}
