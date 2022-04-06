<?php

namespace Tests;

use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase {

/** @test */
    public function testCanCreateBMWCar(){
        $carFactory = new CarAbstractFactory();
        $myCar = $carFactory->createBMWCar();

        self::assertInstanceOf(BMWCar::class, $myCar);

        self::assertEquals($myCar->calculatePrice(), 150000);
    }

/** @test */
    public function testCanCreateBenzCar(){
        $carFactory = new CarAbstractFactory(50000);
        $myCar = $carFactory->createBenzCar();

        $this->assertInstanceOf(BenzCar::class, $myCar);
        self::assertEquals($myCar->calculatePrice(), 250000);
    }

}