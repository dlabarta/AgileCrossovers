<?php
namespace AgileCrossovers;

/**
 * Created by PhpStorm.
 * User: david
 * Date: 15/04/15
 * Time: 18:25
 */

class MyTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var MarsRover
     */
    private $rover;

    public function setUp()
    {
        $this->rover = new MarsRover();
    }

    public function testIsAbleToGetParams()
    {
        $this->rover->command(MarsRover::TURN_LEFT);

        $this->assertEquals($this->rover->getLastCommand(), MarsRover::TURN_LEFT);

    }

    public function testGetCurrentPosition()
    {
        $this->assertEquals($this->rover->getPosition(), array(0,0));
    }

    public function testGetPositionAfterMovingForward()
    {
        $this->rover->command(MarsRover::MOVE_FORWARD);
        $this->assertEquals($this->rover->getPosition(), array(0,1));
    }

    public function testGetPositionAfterTurningRightAndMovingForward()
    {
        $this->rover->command(MarsRover::TURN_RIGHT);
        $this->rover->command(MarsRover::MOVE_FORWARD);
        $this->assertEquals($this->rover->getPosition(), array(1,0));
    }

    public function testLeft() {
        $this->rover->command(MarsRover::TURN_LEFT);
        $this->rover->command(MarsRover::MOVE_FORWARD);
        $this->assertEquals($this->rover->getPosition(), array(0,0));
    }

}
