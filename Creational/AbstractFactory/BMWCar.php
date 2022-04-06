<?php

namespace Creational\AbstractFactory;

class BMWCar implements CarInterface{

    const PRICE = 150000;

    public function calculatePrice() {
        return self::PRICE;
    }

}