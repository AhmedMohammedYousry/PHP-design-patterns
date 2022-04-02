<?php

namespace Behavioral\Command;

class RevertCommand implements Command
{
    private GitReceiver $receiver;

    public function __construct(GitReceiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->gitRevert();
    }

}