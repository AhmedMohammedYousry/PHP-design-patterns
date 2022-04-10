<?php

namespace Behavioral\ChainOfResponsibility;

class HandlerC extends AbstractHandler
{
    public function handle(Request $request)
    {
        if ($request->getId() == 'C')
        {
            $request->setDone(true);
            $request->setHandler(self::class);
            return $request;
        }
        return parent::handle($request);
    }
}