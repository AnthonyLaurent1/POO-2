<?php

class Vehicle
{
    // propriétes
    protected string $color;

    protected int $currentSpeed = 0;

    protected int $nbSeats;

    protected int $nbWheels;

    //Méthodes
    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function brake(): string {
        $brakeSentence = '';
        while ($this->currentSpeed > 0) {
            $this->currentSpeed-= 5;
            $brakeSentence .= 'Brake !! ' . $this->currentSpeed . ' km/h <br>';
        }
        $brakeSentence .= "<br> I'm stopped !";
        return $brakeSentence;
    }

    // getteurs
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

}