<?php

namespace Behavioral\Iterator;



use IteratorAggregate;

// IteratorAggregate lets you specify an external iterator for your collection
class CitiesCollection implements IteratorAggregate
{

    private array $cities = [];

    public function addCity(City $city)
    {
        $this->cities [] = $city;
        return $this;
    }

    public function removeCity(string $name)
    {
        foreach ($this->cities as $key => $city)
        {
            if ($city->getName() === $city)
            {
                unset($this->cities[$key]);
            }
        }
    }

    /**
     * @return array
     */
    public function getCities(): array
    {
        return $this->cities;
    }

    public function getIterator()
    {
        return new OddIterator($this);
    }

    public function getEvenIterator()
    {
        return new EvenIterator($this);
    }

    public function getAreaIterator()
    {
        return new AreaIterator($this);
    }
}