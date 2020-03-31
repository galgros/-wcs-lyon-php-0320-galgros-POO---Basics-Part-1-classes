<?php

class Bicycle
{

    private $color;
    private $currentSpeed;
    private $nbSeats = 1;
    private $nbWheels = 2;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function forward()
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "<br>I'm stopped !";
        return $sentence;
    }
    public function setColor(string $color): string
    {
        return $this->color = $color;
    }
    public function getCurentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }
    public function dump()
    {
        var_dump($this);
    }
}