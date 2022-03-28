<?php

namespace Creational\Prototype;

abstract class AbstractCarPrototype
{
    protected $model;
    private $flag;

    abstract function __clone();

    /**
     * Get the value of flag
     */ 
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set the value of flag
     *
     * @return  self
     */ 
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }
}