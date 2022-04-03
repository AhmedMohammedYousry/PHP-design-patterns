<?php

namespace Structural\Bridge;

class BENZCar extends Car
{
    public function getProduct()
    {
        return sprintf('the car type is %s and the care color is %s','BENZ',$this->carColor->getColor());
    }
}