<?php
namespace AgileCrossovers;

class MarsRover
{
    const MOVE_FORWARD = 'M';
    const TURN_RIGHT = 'R';
    const TURN_LEFT = 'L';
    const NORTH = 'N';

    private $lastCommand;
    private $position;
    private $orientation;

    public function __construct()
    {
        $this->position = array(0,0);
        $this->orientation = self::NORTH;
    }

    public function command($theCommand)
    {
        if ($theCommand == self::MOVE_FORWARD)
        {
            if ($this->orientation == self::NORTH)
                $this->position[1]++;
            else
                $this->position[0]++;
        }
        if ($theCommand == self::TURN_RIGHT)
        {
            $this->orientation = 'E';
        }
        $this->lastCommand=$theCommand;
    }

    public function getLastCommand()
    {
        return $this->lastCommand;
    }

    public function getPosition()
    {
        return $this->position;
    }
}
