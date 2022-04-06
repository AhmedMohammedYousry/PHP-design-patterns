<?php


namespace Tests;


use PHPUnit\Framework\TestCase;
use Structural\Adapter\Car;
use Structural\Adapter\TurboEngineAdapter;
use Structural\Adapter\NormalEngine;
use Structural\Adapter\TurboEngine;

class AdapterTest extends TestCase
{

    public function testCanStartNormalEngine()
    {
        $engine = new NormalEngine();
        $car = new Car($engine);

        $this->assertEquals('normal engine starts',$car->start());
    }

    public function testCanStartTurboEngine()
    {
        $engine = new TurboEngine();
        $adapter = new TurboEngineAdapter($engine);
        $car = new Car($adapter);

        $this->assertEquals('turbo engine starts',$car->start());
    }
}