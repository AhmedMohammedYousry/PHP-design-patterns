<?php

namespace Structural\Bridge;

class BMWCar extends Car
{

    public function getProduct()
    {
        return sprintf('the car type is %s and the car color is %s','BMW',$this->carColor->getColor());
    }
}