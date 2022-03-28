<?php

namespace Creational\Prototype;

class AutoCarPrototype extends AbstractCarPrototype
{


    protected $model = "Automatic";

    public function __clone()
    {
        
    }
}