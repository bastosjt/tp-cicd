<?php

namespace App\Tests\Unit;

use App\Another;
use PHPUnit\Framework\TestCase;

class AnotherTest extends TestCase
{
    public function testTest(): void
    {
        $another = new Another();
        $result = $another->test();
        
        $this->assertEquals('Test', $result);
    }
}