<?php

namespace Creational\StaticFactory;

use InvalidArgumentException;

final class StaticFactory
{
    public static function factory(string $type)
    {
        if ($type === 'BMW')
        {
            return new BMWCar();
        } elseif ($type === 'BENZ')
        {
            return new BENZCar();
        }
        throw new InvalidArgumentException('Unknown format given');
    }
}