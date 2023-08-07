<?php

namespace Tests;

trait CustomAssertion
{
    /**
     * just assert 1D key
     * TODO: deeply recursive validate
     */
    function assertJsonStructure($response, $assertStructure)
    {
        return $this->assertTrue(
            count(array_intersect(array_keys($response), $assertStructure)) == count($assertStructure)
        );
    }
}
