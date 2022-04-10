<?php

namespace Behavioral\ChainOfResponsibility;

class HandlerB extends AbstractHandler
{

    public function handle(Request $request)
    {
        if ($request->getId() == 'B')
        {
            $request->setDone(true);
            $request->setHandler(self::class);
            return $request;
        }
        return parent::handle($request);
    }
}