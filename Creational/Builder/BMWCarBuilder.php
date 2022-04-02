<?php

namespace Creational\Builder;

use Creational\Builder\Models\BMWCar;
use Creational\Builder\Models\Car;

class BMWCarBuilder implements CarBuilderInterface {

    /**
     * @var Car $type
     */
    private Car $type;

    public function createCar()
    {
        // TODO: Implement createCar() method.
        $this->type = new BMWCar();
    }

    public function addBody()
    {
        // TODO: Implement addBody() method.
        $this->type->setPart('BODY','bmw-body');
    }
    public function addDoors()
    {
        // TODO: Implement addDoors() method.
        $this->type->setPart('DOOR','bmw-door');
    }
    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->type->setPart('ENGINE','bmw-engine');
    }
    public function addWheels()
    {
        // TODO: Implement addWheel() method.
        $this->type->setPart('WHEEL','bmw-wheel');
    }
    public function getCar() :Car
    {
        // TODO: Implement getCar() method.
        return $this->type;
    }

}