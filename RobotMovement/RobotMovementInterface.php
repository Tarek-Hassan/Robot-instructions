<?php

interface RobotMovementInterface
{
    public function move(): void;

    public function getX(): int;

    public function getY(): int;

    public function getIgnoredInstructions(): string;

    public function getFinalPosition(): string;
}
