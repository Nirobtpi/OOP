<?php
abstract class Vehicle
{

    function display()
    {
        echo "Welcom To Vehicle";
    }
    abstract  protected function capacity();
    abstract protected function fuel();
}


class Car extends Vehicle
{

    public function capacity()
    {
        echo "5";
    }
    public function fuel()
    {
        echo "10";
    }
}
$car = new Car();
$car->display();
$car->capacity();
$car->fuel();

