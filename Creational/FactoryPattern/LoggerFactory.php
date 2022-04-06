<?php

namespace Creational\FactoryPattern;

interface LoggerFactory
{
    public function createLogger(): Logger;
}