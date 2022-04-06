<?php

namespace Tests;

use Creational\Prototype\AutoCarPrototype;
use Creational\Prototype\ManualCarPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase{


    public  function testCanCreateAutomaticCarsWithClone()
    {
        $automaticProtoTypeCar = new AutoCarProtoType();
        for( $index = 1 ; $index <=10 ; $index ++){
            // we clone 10 copies of automatic cars without the need of dealing with its prototype
            $newCar = clone $automaticProtoTypeCar;
            $this->assertInstanceOf( AutoCarProtoType::class, $newCar);
        }
    }

    public  function testCanCreateManualCarsWithClone()
    {
        $ManualProtoTypeCar = new ManualCarPrototype;
        for( $index = 1 ; $index <=10 ; $index ++){
            $newCar = clone $ManualProtoTypeCar;
            $this->assertInstanceOf( ManualCarProtoType::class, $newCar);
        }
    }


}