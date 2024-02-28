<?php

use PHPUnit\Framework\TestCase;

require './../RobotMovement/SimpleRobotMovement.php';

class RobotMovementTest extends TestCase
{
    public function testMoveForward()
    {
        $robot = new SimpleRobotMovement('FF');
        $robot->move();
        $this->assertEquals(0, $robot->getX());
        $this->assertEquals(2, $robot->getY());
    }

    public function testMoveBackward()
    {
        $robot = new SimpleRobotMovement('BB');
        $robot->move();
        $this->assertEquals(0, $robot->getX());
        $this->assertEquals(-2, $robot->getY());
    }

    public function testMoveRight()
    {
        $robot = new SimpleRobotMovement('RR');
        $robot->move();
        $this->assertEquals(2, $robot->getX());
        $this->assertEquals(0, $robot->getY());
    }

    public function testMoveLeft()
    {
        $robot = new SimpleRobotMovement('LL');
        $robot->move();
        $this->assertEquals(-2, $robot->getX());
        $this->assertEquals(0, $robot->getY());
    }

    public function testInvalidInstruction()
    {
        $robot = new SimpleRobotMovement('XYZ');
        $robot->move();
        $this->assertEquals('XYZ', $robot->getIgnoredInstructions());
    }
    
    public function testValidInstruction()
    {
        $robot = new SimpleRobotMovement('FFRFL ');
        $robot->move();
        $this->assertEquals(0, $robot->getX());
        $this->assertEquals(3, $robot->getY());
    }
}
