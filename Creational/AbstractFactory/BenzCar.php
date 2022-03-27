<?php

namespace Creational\AbstractFactory;

class BenzCar implements CarInterface{

    private $price;
    private $tax;

    public function __construct($price, $tax)
    {
        $this->price = $price;
        $this->price = $tax;
    }

    public function calculatePrice() {
        return $this->price + $this->tax + 200000;
    }

}