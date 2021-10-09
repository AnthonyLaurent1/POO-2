<?php
require_once 'Vehicle.php';
class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    // propriétés
    private string $energy;

    private int $energyLevel;

    // méthodes


    // je demarre
    public function start(): string {
        $sentence = '';
        if ($this->currentSpeed === 0){
            $sentence = 'je démarre';
        }
        return $sentence;
    }

    // j'avance
    public function forward(): string
    {
        $this->currentSpeed = 50;
        return "Go !";
    }


    // getters

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;

    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;

    }

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }



}