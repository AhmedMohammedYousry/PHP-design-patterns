<?php

namespace Behavioral\Observer;


use SplObjectStorage;
use SplObserver;
use SplSubject;

class Course implements SplSubject
{
    private SplObjectStorage $observers;
    private string $announcement;
    private int $announcementNumber = 0;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        /**
         * @var SplObserver $observer
         */
        foreach ($this->observers as $observer)
        {
            $observer->update($this);
        }
    }
    public function addNewAnnouncement(string $announcement)
    {
        $this->announcement = $announcement;
        $this->announcementNumber++;
        $this->notify();
    }

    /**
     * @return string
     */
    public function getAnnouncement(): string
    {
        return $this->announcement;
    }

    /**
     * @return int
     */
    public function getAnnouncementNumber(): int
    {
        return $this->announcementNumber;
    }
}