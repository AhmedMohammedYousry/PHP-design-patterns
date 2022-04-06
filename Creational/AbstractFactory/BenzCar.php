<?php

namespace Creational\AbstractFactory;

class BenzCar implements CarInterface{

    const PRICE = 200000;
    private $tax;

    public function __construct($tax)
    {
        $this->tax = $tax;
    }

    public function calculatePrice() {
        return self::PRICE + $this->tax ;
    }

}