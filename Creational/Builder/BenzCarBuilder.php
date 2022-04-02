<?php

namespace Creational\Builder;

use Creational\Builder\Models\BenzCar;
use Creational\Builder\Models\Car;


class BENZCarBuilder implements CarBuilderInterface
{

    /**
     * @var Car $type
     */
    private Car $type;

    public function createCar()
    {
        // TODO: Implement createCar() method.
        $this->type = new BENZCar();
    }

    public function addBody()
    {
        // TODO: Implement addBody() method.
        $this->type->setPart('BODY','benz-body');
    }
    public function addDoors()
    {
        // TODO: Implement addDoors() method.
        $this->type->setPart('DOOR','benz-door');
    }
    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->type->setPart('ENGINE','benz-engine');
    }
    public function addWheels()
    {
        // TODO: Implement addWheel() method.
        $this->type->setPart('WHEEL','benz-wheel');
    }
    public function getCar() :Car
    {
        // TODO: Implement getCar() method.
        return $this->type;
    }
}