<?php

namespace Creational\Prototype;

class ManualCarPrototype extends AbstractCarPrototype
{


    protected $model = "Manual";

    public function __clone()
    {
        
    }
}