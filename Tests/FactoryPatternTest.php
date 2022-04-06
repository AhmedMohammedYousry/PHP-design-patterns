<?php

namespace Tests;


use Creational\FactoryPattern\FileLogger;
use Creational\FactoryPattern\FileLoggerFactory;
use Creational\FactoryPattern\StdoutLogger;
use Creational\FactoryPattern\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryPatternTest extends TestCase
{
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}