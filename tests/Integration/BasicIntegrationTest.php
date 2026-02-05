<?php

namespace App\Tests\Integration;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BasicIntegrationTest extends WebTestCase
{
    public function testAnotherClassExists(): void
    {
        $this->assertTrue(class_exists(\App\Another::class));
    }
}