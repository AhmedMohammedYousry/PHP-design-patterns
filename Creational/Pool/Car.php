<?php

namespace Creational\Pool;

use DateTime;

class Car {

    private $rentAt;

    public function __construct()
    {
        $this->rentAt = new DateTime();
    }
    public function moveCar(): string
    {
        return "car is moving";

    }

    /**
     * @return DateTime
     */
    public function getRentAt(): DateTime
    {
        return $this->rentAt;
    }
}