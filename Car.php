<?php

class Car
{
    private $nbWheels;
    private $currentSpeed;
    private $color;
    private $nbSeat;
    private $energy;
    private $energyLevel;

    public function __construct(string $color,int $nbSeat,string $energy)
    {
        $this->color = $color;
        $this->nbSeat = $nbSeat;
        $this->energy = $energy;
    }
    public function start()
    {
        return "Started Engine !<br>";
    }
    public function forward()
    {
        $this->currentSpeed = 15;
        return "Go !";
    }
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0){
            $sentence .= "Brake !!!";
            $this->currentSpeed--;
        }
        $sentence .= "<br>I'm stopped";
        return $sentence;
    }

    public function getNbWheels()
    {
        return $this->nbWheels;
    }
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function getNbSeat()
    {
        return $this->nbSeat;
    }
    public function getEnergy()
    {
        return $this->energy;
    }
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }
}