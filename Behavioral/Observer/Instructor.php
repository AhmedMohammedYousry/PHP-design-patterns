<?php

namespace Behavioral\Observer;

use SplSubject;

class Instructor extends Observer
{

    public function update(SplSubject $subject)
    {
        $this->notification = sprintf('New Announcement (%d) for Instructors: %s',
            $subject->getAnnouncementNumber(), $subject->getAnnouncement());
    }
}