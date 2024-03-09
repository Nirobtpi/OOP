<?php
require_once("Vehicle.php");
class Car extends Vehicle
{

    public function message()
    {
        parent::message();
        echo "<br>";
        echo "This is a Car";
    }
}

$car = new Car("Car");
echo " <br>";
$car->Foule = "30 Litters";
echo $car->FuelAmmount();
echo " <br>";
$car->capacity = "5 People Sets In the car";
echo $car->capacity();
echo " <br>";
$car->breacked = "Car Is Running";
echo $car->applyBreak();
echo "<br>";
$car->message();
