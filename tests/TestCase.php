<?php

namespace BernskioldMedia\LaravelMatomo\Tests;

use BernskioldMedia\LaravelMatomo\LaravelMatomoServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelMatomoServiceProvider::class,
        ];
    }
}
