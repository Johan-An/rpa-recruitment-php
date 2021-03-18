<?php

use MyGreeter\Client;
use PHPUnit\Framework\TestCase;

class MyGreeterClientTest extends TestCase
{
    public function setUp()
    {
        $this->greeter = new Client();
    }

    public function test_Instance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }

    public function test_getHour()
    {
        $this->assertInternalType('numeric', $this->greeter->getHour());
        $this->assertGreaterThanOrEqual(0, $this->greeter->getHour());
        $this->assertLessThanOrEqual(24, $this->greeter->getHour());
    }
    
    public function test_getGreeting()
    {
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );
        $this->assertContains($this->greeter->getGreeting(), ["Good morning", "Good afternoon", "Good evening"]);
    }
}
