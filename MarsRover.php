<?php
namespace AgileCrossovers;

class MarsRover
{
    private $lastCommand;

    public function command($theCommand)
    {
        $this->lastCommand=$theCommand;
    }

    public function getLastCommand()
    {
        return $this->lastCommand;
    }
}
