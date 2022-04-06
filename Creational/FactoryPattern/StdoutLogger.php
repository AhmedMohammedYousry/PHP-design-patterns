<?php

namespace Creational\FactoryPattern;

class StdoutLogger implements Logger
{

    public function log(string $message)
    {
        echo $message;
    }
}