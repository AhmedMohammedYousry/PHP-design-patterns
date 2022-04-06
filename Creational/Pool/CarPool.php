<?php

namespace Creational\Pool;


class CarPool {

    /**
     * @var Car []
     */
    private array $freeCars = [];
    /**
     * @var Car []
     */
    private array $busyCars = [];

    public function rentCar(): Car
    {
        if(count($this->freeCars) == 0)
        {
            $car = new Car();
        }
        else {
            $car = array_pop($this->freeCars);
        }
        $this->busyCars[spl_object_hash($car)] = $car;

        return $car;
    }

    public function freeCar(Car $car)
    {
        $carId = spl_object_hash($car);

        if(isset($this->busyCars[$carId]))
        {
            unset($this->busyCars[$carId]);
            $this->freeCars[$carId] = $car;
        }
    }

    public function getAllCars() : int
    {
        return count($this->freeCars) + count($this->busyCars);
    }

    public function getFreeCount(): int
    {
        return count ($this->freeCars);
    }
}