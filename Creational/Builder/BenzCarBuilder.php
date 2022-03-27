<?php

namespace Creational\Builder;

use BenzCar;
use Creational\Models\Car;


class BENZCarBuilder implements CarBuilderInterface
{

    /**
     * @var Car $type
     */
    private  $type;

    public function createCar()
    {
        // TODO: Implement createCar() method.
        $this->type = new BENZCar();
    }

    public function addBody()
    {
        // TODO: Implement addBody() method.
        $this->type->setPart('BODY','body');
    }
    public function addDoors()
    {
        // TODO: Implement addDoors() method.
        $this->type->setPart('DOOR','door');
    }
    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->type->setPart('ENGINE','engine');
    }
    public function addWheels()
    {
        // TODO: Implement addWheel() method.
        $this->type->setPart('WHEEL','wheel');
    }
    public function getCar() :Car
    {
        // TODO: Implement getCar() method.
        return $this->type;
    }
}