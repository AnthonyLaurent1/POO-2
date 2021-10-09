<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    // propriétes
    private int $capacity;
    private int $storage = 0;

    // Méthodes

    public function __construct( int $capacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color,$nbSeats);
        $this->energy = $energy;
        $this->capacity = $capacity;
    }
    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function getStorage(): int
    {
        return $this->storage;
    }
    public function setCapacity(int $Capacity): void
    {
        $this->Capacity = $Capacity;
    }

    public function setStorage(int $storage): void
    {
        if ($storage >= 0 ){
            $this->storage = $storage;
        }
    }

    public function load(): string
    {
        $sentence = '';
        while ($this->storage < $this->capacity){
            $this->storage += 5;
            $sentence .= 'In filling ' . $this->storage . '<br>';
        }
        $sentence .= 'Full';
        return $sentence;
    }



}