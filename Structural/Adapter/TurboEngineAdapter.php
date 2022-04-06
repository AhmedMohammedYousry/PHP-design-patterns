<?php

namespace Structural\Adapter;

class TurboEngineAdapter implements EngineInterface
{
    private $engine;

    public function __construct(TurboEngine $engine)
    {
        $this->engine = $engine;
    }


    public function startEngine()
    {
        return $this->engine->startTurbo();
    }
}