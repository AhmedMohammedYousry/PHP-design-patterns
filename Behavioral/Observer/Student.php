<?php

namespace Behavioral\Observer;


use SplObserver;
use SplSubject;

class Student extends Observer
{

    /**
     * @param Course $subject
     */
    public function update(SplSubject $subject)
    {
        $this->notification = sprintf('New Announcement (%d) for Students: %s',
            $subject->getAnnouncementNumber(), $subject->getAnnouncement());
    }
}