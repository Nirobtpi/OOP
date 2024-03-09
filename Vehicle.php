<?php

class Vehicle
{
    public $VehicleName;
    public $Foule = 5;
    public $capacity = 3;
    public $breacked = "Breacked";

    function __construct($VehicleName)
    {
        echo $this->VehicleName = $VehicleName;
    }

    public function FuelAmmount()
    {
        return $this->Foule;
    }

    public function capacity()
    {
        return $this->capacity;
    }

    public function applyBreak()
    {
        return $this->breacked;
    }

    public function message()
    {
        echo "This is Vechile";
    }
}

class Furits
{
    public $name;
    public $color;

    public function __construct($name = "Banana", $color = "Yellow")
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}
