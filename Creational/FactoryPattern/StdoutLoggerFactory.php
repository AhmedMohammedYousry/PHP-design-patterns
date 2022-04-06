<?php

namespace Creational\FactoryPattern;

class StdoutLoggerFactory implements LoggerFactory
{

    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}