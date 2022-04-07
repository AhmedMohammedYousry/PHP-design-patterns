<?php

namespace Behavioral\Iterator;

use Iterator;

class AreaIterator implements Iterator
{

    private CitiesCollection $citiesCollection;
    private $sortedAreas = [];
    private $index = 0;

    public function __construct(CitiesCollection $citiesCollection)
    {
        $this->citiesCollection = $citiesCollection;
        $this->sortedAreas = $this->citiesCollection->getCities();
        $this->sortByArea();
    }

    public function current()
    {
        return $this->sortedAreas[$this->index];
    }

    public function next()
    {
        $this->index++;
    }

    public function key()
    {
        return $this->index;
    }

    public function valid()
    {
        return isset($this->sortedAreas[$this->index]);
    }

    public function rewind()
    {
        $this->index = 0;
    }

    private function sortByArea()
    {
        $areas = [];

        foreach ($this->citiesCollection->getCities() as $city)
        {
            $areas[] = $city->getArea();
        }
        array_multisort($areas, SORT_DESC, $this->sortedAreas);
    }
}