<?php

namespace Behavioral\ChainOfResponsibility;

class HandlerA extends AbstractHandler
{

    public function handle(Request $request)
    {
        if ($request->getId() == 'A')
        {
            $request->setDone(true);
            $request->setHandler(self::class);
            return $request;
        }
        return parent::handle($request);
    }
}