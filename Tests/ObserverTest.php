<?php

namespace Tests;

use Behavioral\Observer\Course;
use Behavioral\Observer\Instructor;
use Behavioral\Observer\Organizer;
use Behavioral\Observer\Student;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{

    private Course $course;
    private Student $student;
    private Instructor $instructor;
    private Organizer $organizer;

    protected function setUp(): void
    {
        $this->course = new Course();
        $this->student = new Student();
        $this->instructor = new Instructor();
        $this->organizer =  new Organizer();

        $this->course->attach($this->student);
        $this->course->attach($this->instructor);
        $this->course->attach($this->organizer);
    }


    public function testCanNotifyAllOberversWhenNewAnnouncementIsMade()
    {
        $this->course->addNewAnnouncement('Week one started!');

        $this->assertEquals('New Announcement (1) for Students: Week one started!',$this->student->getNotification());
        $this->assertEquals('New Announcement (1) for Organizers: Week one started!',$this->organizer->getNotification());
        $this->assertEquals('New Announcement (1) for Instructors: Week one started!',$this->instructor->getNotification());
    }

    public function testCanNotifyAllOberversWhenTwoNewAnnouncementsAreMade()
    {
        $this->course->addNewAnnouncement('Week one started!');
        $this->course->addNewAnnouncement('Week two started!');

        $this->assertEquals('New Announcement (2) for Students: Week two started!',$this->student->getNotification());
        $this->assertEquals('New Announcement (2) for Organizers: Week two started!',$this->organizer->getNotification());
        $this->assertEquals('New Announcement (2) for Instructors: Week two started!',$this->instructor->getNotification());


    }

}