<?php

namespace Tests;

use Behavioral\Iterator\CitiesCollection;
use Behavioral\Iterator\City;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
    private City $newYork;
    private City $losAngeles;
    private City $chicago;
    private City $houston;
    private CitiesCollection $us;

    protected function setUp(): void
    {
        $this->newYork = new City('New York', 300);
        $this->losAngeles = new City('Los Angeles', 470);
        $this->chicago = new City('Chicago', 227);
        $this->houston = new City('Houston', 640);

        $this->us = new CitiesCollection();
        $this->us->addCity($this->newYork)
            ->addCity($this->losAngeles)
            ->addCity($this->chicago)
            ->addCity($this->houston);
    }

    public function testCanUseOddIterator()
    {
        $list = [];

        foreach ($this->us as $city)
        {
            $list [] = $city->getName();
        }
        self::assertEquals(['Los Angeles', 'Houston'], $list);
    }

    public function testCanUseEvenIterator()
    {
        $list = [];

        foreach ($this->us->getEvenIterator() as $city)
        {
            $list [] = $city->getName();
        }
        self::assertEquals(['New York', 'Chicago'], $list);
    }

    public function testCanUseAreaIterator()
    {
        $list = [];

        foreach ($this->us->getAreaIterator() as $city)
        {
            $list [] = $city->getName();
        }
        self::assertEquals(['Houston', 'Los Angeles','New York', 'Chicago'], $list);
    }

}