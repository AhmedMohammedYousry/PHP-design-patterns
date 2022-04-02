<?php

namespace Tests;

use Creational\Builder\BENZCarBuilder;
use Creational\Builder\Models\BMWCar;
use Creational\Builder\BMWCarBuilder;
use Creational\Builder\CarProducer;
use Creational\Builder\Models\BenzCar;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase{



    public  function  testProduceBMWCar() {
        $builder = new BMWCarBuilder();
        $carProducer = new CarProducer($builder);
        $myCar = $carProducer->produceCar();
        $this->assertInstanceOf(BMWCar::class, $myCar);
     }

     public  function  testProduceBenzCar() {
        $builder = new BENZCarBuilder();
        $carProducer = new CarProducer($builder);
        $myCar = $carProducer->produceCar();
        $this->assertInstanceOf(BenzCar::class, $myCar);
     }


    }