<?php

namespace Creational\FactoryMethod;

class BenzBrandFactory implements BrandFactory {
    
    public function buildBrand()
    {
        return new BenzBrand();
    }
}