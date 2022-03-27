<?php

namespace Creational\FactoryMethod;

class BMWBrandFactory implements BrandFactory {
    
    public function buildBrand()
    {
        return new BMWBrand();
    }
}