<?php

class  Gari
{
    public $name;
    public $capacity;
    public $fuel;

    // function __construct($name)
    // {
    //   echo  $this->name=$name;
    // }

    public function capacity($capacity)
    {
        return $capacity;
    }
    public function fuel($fuel)
    {
        return $fuel;
    }
}

class Care extends Gari
{
}

$car = new Care();
echo $car->fuel(50);
echo $car->capacity(5);
echo "<br>";
echo "<br>";


interface Ujjal
{
    
    function __construct($name);
    public function bari($bari);
}

class Name implements Ujjal
{
    public $name;
    function __construct($name)
    {
      echo  $this->name = $name;
    }
    public function bari($bari)
    {
        echo $bari;
    }
}
$ujjal = new Name("Ujjal Chandra");
echo "<br>";
$ujjal->bari("Dinajpur");
