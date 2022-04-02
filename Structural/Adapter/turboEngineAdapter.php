<?php

namespace Structural\Adapter;

class turboEngineAdapter implements TurboInterface
{
    private $engine;

    public function __construct(TurboEngine $engine)
    {
        $this->engine = $engine;
    }

    public function startTurbo()
    {
        return $this->engine->startTurbo();
    }
}