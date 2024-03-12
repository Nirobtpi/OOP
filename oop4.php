<?php
class Rectangle
{
    public $width;
    public $height;

    function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    function getArea()
    {
        return $this->width * $this->height;
    }
    function getPerimeter()
    {
        return 2 * ($this->width + $this->height);
    }
}

$cl = new Rectangle(1, 9);
echo $cl->getArea();
echo "<br>";
echo $cl->getPerimeter();

interface Person
{
    function name();
    function city();
    function countery();
}

class Nirob implements Person
{
    public $name;
    public $city;
    public $country;

    function __construct($name, $city, $country)
    {
        $this->name = $name;
        $this->city = $city;
        $this->country = $country;
    }
    function name()
    {
        echo "My name is {$this->name}";
    }
    function city()
    {
        echo "I lives in {$this->city}";
    }
    function countery()
    {
        echo "My country name {$this->country}";
    }
}
$niro = new Nirob("Nur Alam Nirob", "Dhaka", "Bangladesh");
echo "<br>";
$niro->name();
echo "<br>";
$niro->city();
echo "<br>";
$niro->countery();

// interface me{
//     function nirob();
// }
// class A implements me{
//     function nirob(){
        
//     }
// }

