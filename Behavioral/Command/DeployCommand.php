<?php

namespace Behavioral\Command;

class DeployCommand implements Command
{

    private GitReceiver $receiver;

    public function __construct(GitReceiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->gitAdd();
        $this->receiver->gitCommit();
        $this->receiver->gitPush();
    }
}