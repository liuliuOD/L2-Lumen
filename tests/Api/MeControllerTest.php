<?php

namespace Tests\Api;

use PHPUnit\Event;
use Tests\Asserts\Responses;

class MeControllerTest extends \Tests\TestCase
{
    public function testShow()
    {
        $url = route("api.me.show");

        $response = $this->call(self::METHOD_GET, $url);
        $content = json_decode($response->getContent(), true);

        // there are many differences in assertion methods between Laravel and Lumen
        $this->assertEquals(200, $response->status());
        $this->assertJsonStructure($content, Responses::API["MeController"]["show"]);
    }
}
