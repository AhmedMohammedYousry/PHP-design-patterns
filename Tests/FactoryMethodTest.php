<?php

namespace Tests;


use Creational\FactoryMethod\BENZBrand;
use Creational\FactoryMethod\BENZBrandFactory;
use Creational\FactoryMethod\BMWBrand;
use Creational\FactoryMethod\BMWBrandFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase {

/** @test */
    public function testCanBuildBMWBrand(){
        $brandFactory = new BMWBrandFactory();
        $myBrand = $brandFactory->buildBrand();

        $this->assertInstanceOf(BMWBrand::class, $myBrand);
    }

    public function testCanBuildBenzBrand(){
        $brandFactory = new BenzBrandFactory();
        $myBrand = $brandFactory->buildBrand();

        $this->assertInstanceOf(BenzBrand::class, $myBrand);
    }

}