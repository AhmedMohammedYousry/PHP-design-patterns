<?php

namespace Behavioral\Mediator;

class RoadLightMediator implements MediatorInterface
{

    private Road $rightRoad;
    private Road $leftRoad;

    public function __construct(Road $rightRoad, Road $leftRoad)
    {
        $this->rightRoad = $rightRoad;
        $this->rightRoad->setMediator($this);
        $this->leftRoad = $leftRoad;
        $this->leftRoad->setMediator($this);
    }

    public function action(Road $road, string $event)
    {
        if ($road->getId() == 'left')
        {
            if ($event == Road::STOP_EVENT)
            {
                $this->rightRoad->move();
            }else
            {
                $this->rightRoad->stop();
            }

        }
        if ($road->getId() == 'right')
        {
            if ($event == Road::STOP_EVENT)
            {
                $this->leftRoad->move();
            } else
            {
                $this->leftRoad->stop();
            }
        }
    }
}