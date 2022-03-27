<?php

namespace Creational\FactoryMethod;

class BenzBrand implements CarBrandInterface {
    
    public function createBrand(){
        return "Benz Brand";
    }
}