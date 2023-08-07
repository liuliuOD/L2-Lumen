<?php

namespace Tests;

use Laravel\Lumen\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CustomAssertion;

    const METHOD_GET = "GET";
    const METHOD_POST = "POST";
    const METHOD_UPDATE = "UPDATE";
    const METHOD_DELETE = "DELETE";

    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\Application
     */
    public function createApplication()
    {
        return require __DIR__.'/../bootstrap/app.php';
    }
}
