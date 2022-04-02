<?php

namespace Tests;


use Creational\Singleton\Database;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = Database::getInstance();
        $secondCall = Database::getInstance();

        $this->assertInstanceOf(Database::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}