<?php
require_once("Vehicle.php");

class Bus extends Vehicle
{

    public function bus()
    {
        echo "This is a bus. The name of bus Poristhan";
    }
}
$bus = new Bus("Bus");
echo "<br>";
$bus->Foule = "30 Litters";
echo $bus->FuelAmmount();
echo "<br>";
$bus->capacity = "50 People";
echo $bus->capacity();
echo "<br>";
echo $bus->applyBreak();
echo "<br>";
$bus->bus();
echo "<br>";
echo "<br>";
echo "<br>";


class Mango extends Furits
{
    public $weight = 0;
    public function __construct($name, $color, $weight)
    {
       
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    public function intro()
    {
        parent::intro();
        echo "<br>";
        echo "The fruit name is {$this->name} and the color is {$this->color} and weight {$this->weight} KG .";
    }
}
$mango = new Mango("Mango", "Red", 10);
$mango->intro();
