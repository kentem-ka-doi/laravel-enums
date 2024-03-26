<?php

namespace Kentem\Laravel\Enums\Tests\Integration;

use Kentem\Laravel\Enums\EnumServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            EnumServiceProvider::class,
        ];
    }
}
