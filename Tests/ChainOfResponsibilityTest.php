<?php

namespace Tests;

use Behavioral\ChainOfResponsibility\HandlerA;
use Behavioral\ChainOfResponsibility\HandlerB;
use Behavioral\ChainOfResponsibility\HandlerC;
use Behavioral\ChainOfResponsibility\Request;
use PHPUnit\Framework\TestCase;

class ChainOfResponsibilityTest extends TestCase
{
    private HandlerA $handlerA;
    private HandlerB $handlerB;
    private HandlerC $handlerC;

    protected function setUp(): void
    {
        $this->handlerA = new HandlerA();
        $this->handlerB = new HandlerB();
        $this->handlerC = new HandlerC();

        $this->handlerA->setNext($this->handlerB);
        $this->handlerB->setNext($this->handlerC);
    }

    public function testHandlerACanHandleRequest()
    {
        $request = new Request();
        $request->setId('A');
        $response = $this->handlerA->handle($request);

        self::assertEquals(HandlerA::class, $response->getHandler());
        self::assertTrue($response->isDone());
    }

    public function testHandlerBCanHandleRequest()
    {
        $request = new Request();
        $request->setId('B');
        $response = $this->handlerA->handle($request);

        self::assertEquals(HandlerB::class, $response->getHandler());
        self::assertTrue($response->isDone());
    }

    public function testHandlerCCanHandleRequest()
    {
        $request = new Request();
        $request->setId('C');
        $response = $this->handlerA->handle($request);

        self::assertEquals(HandlerC::class, $response->getHandler());
        self::assertTrue($response->isDone());
    }

    public function testNoOneCanHandleRequest()
    {
        $request = new Request();
        $request->setId('X');
        $response = $this->handlerA->handle($request);
        
        self::assertFalse($response->isDone());
    }
}