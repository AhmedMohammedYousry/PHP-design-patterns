<?php

namespace Behavioral\Command;

class GitReceiver
{
    private array $gitLog = [];

    /**
     * @return array
     */
    public function getGitLog(): array
    {
        return $this->gitLog;
    }

    public function gitAdd()
    {
        $this->gitLog [] = 'Git - Add';
    }

    public function gitCommit()
    {
        $this->gitLog [] = 'Git - Commit';
    }

    public function gitPush()
    {
        $this->gitLog [] = 'Git - Push';
    }

    public function gitRevert()
    {
        $this->gitLog  = ['Git - Revert'];
    }


}