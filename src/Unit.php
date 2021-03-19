<?php

class Unit
{
    const DIRECTIONS = ['right', 'left', 'top', 'bottom'];

    private $life;
    private $position;
    protected $speed;

    public function __construct()
    {
        $this->speed = 1;
        $this->position = [0, 0];
    }

    public function walk(string $direction)
    {
        if (in_array($direction, self::DIRECTIONS)) {
            $previousX = $this->position[0];
            $previousY = $this->position[1];
            switch ($direction) {
                case 'right':
                    $this->position[0] = $previousX + $this->speed;
                    break;
                case 'left':
                    $this->position[0] = $previousX - $this->speed;
                    break;
                case 'top':
                    $this->position[1] = $previousY + $this->speed;
                    break;
                case 'bottom':
                    $this->position[1] = $previousY - $this->speed;
                    break;
            }
        }
        return $this;
    }

    public function __toString()
    {
        $x = strval($this->position[0]);
        $y = strval($this->position[1]);

        return "[$x,$y]";
    }
}
