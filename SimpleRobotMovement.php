<?php

require 'RobotMovementInterface.php';

class SimpleRobotMovement implements RobotMovementInterface
{
    private int $x = 0;
    private int $y = 0;
    private string $ignoredInstructions = '';

    public function __construct(private string $instructions)
    {
    }

    public function getFinalPosition(): string
    {
        return "{$this->instructions} => x={$this->getX()} y={$this->getY()}";
    }

    public function getIgnoredInstructions(): string
    {
        return $this->ignoredInstructions;
    }

    public function move(): void
    {
        $this->processInstructions($this->instructions);
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    private function processInstructions(string $instructions): void
    {
        foreach (str_split($instructions) as $instruction) {
            if ($this->isValidInstruction($instruction)) {
                $this->moveRobot($instruction);
            } else {
                $this->ignoredInstructions .= $instruction;
            }
        }
    }

    private function moveRobot(string $instruction): void
    {
        match ($instruction) {
            'F' => $this->y++,
            'B' => $this->y--,
            'R' => $this->x++,
            'L' => $this->x--,
        };
    }

    private function isValidInstruction(string $instruction): bool
    {
        return in_array($instruction, ['F', 'B', 'R', 'L']);
    }
}
