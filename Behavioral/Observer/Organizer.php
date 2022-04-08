<?php

namespace Behavioral\Observer;

use SplSubject;

class Organizer extends Observer
{

    public function update(SplSubject $subject)
    {
        $this->notification = sprintf('New Announcement (%d) for Organizers: %s',
            $subject->getAnnouncementNumber(), $subject->getAnnouncement());
    }
}