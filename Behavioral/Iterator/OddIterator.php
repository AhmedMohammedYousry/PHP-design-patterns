<?php

namespace Behavioral\Iterator;


use Iterator;

class OddIterator implements Iterator
{

    private CitiesCollection $cities;
    private int $index = 1;

    public function __construct(CitiesCollection $cities)
    {
        $this->cities = $cities;
    }

    public function current()
    {
        return $this->cities->getCities()[$this->index];
    }

    public function next()
    {
        return $this->nextOdd();
    }

    public function key()
    {
        return $this->index;
    }

    public function valid()
    {
        return isset($this->cities->getCities()[$this->index]);
    }

    public function rewind()
    {
        $this->index = 1;
    }

    private function nextOdd()
    {
        for ($item = 0 ; $item < count($this->cities->getCities()); $item++)
        {
            if (++$this->index % 2 === 1)
            {
                return $this->index;
                break;
            }
            return ++$this->index;
        }
    }
}