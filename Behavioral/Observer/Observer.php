<?php

namespace Behavioral\Observer;

use SplObserver;
use SplSubject;

abstract class Observer implements SplObserver
{
    protected string $notification;

    /**
     * @param Course $subject
     */
    abstract public function update(SplSubject $subject);

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return $this->notification;
    }
}