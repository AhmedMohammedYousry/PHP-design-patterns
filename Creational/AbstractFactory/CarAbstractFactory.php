<?php

namespace Creational\AbstractFactory;

class CarAbstractFactory {

    private $tax ;

    public function __construct($tax = 0)
    {
        $this->tax = $tax;
    }

    public function createBMWCar() : BMWCar {
        return new BMWCar();
    }

    public function createBenzCar() : BenzCar {
        return new BenzCar($this->tax);
    }

}