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

    const MOVE_LEFT = 'L';

    public function setUp()
    {
        $this->rover = new MarsRover();
    }

    /**
     *
     */
    public function testIsAbleToGetParams()
    {
        $this->rover->command(self::MOVE_LEFT);

        $this->assertEquals($this->rover->getLastCommand(), self::MOVE_LEFT);

    }

}
