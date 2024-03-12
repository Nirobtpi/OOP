<?php 

// create class 

class Person{
    public $name; // proparty 

    function set_name($name){
        return $this->name=$name;
    }
    function get_name(){
        echo $this->name;
    }

}

$name=new Person();
$name->set_name("Md. Nur Alam Nirob");
$name->get_name();

// constractor function 

class Name{
    public $name;

    function __construct($name){
        $this->name=$name;
    }

    function get_name(){
        echo $this->name;
    }
}
echo "<br>";
$nirob=new Name("Saba");
$nirob->get_name();

// extends class 
class Ayan extends Name{

}
echo "<br>";
$ayan=new Ayan("Ayan");
$ayan->get_name();

// interface class 

interface Vehicle{
    public function __construct($name, $capacity, $fuel);
    public function name();
    public function capacity();
    public function fuel();
}

class Car implements Vehicle{
    public $name;
    public $capacity;
    public $fuel;

    public function __construct($name,$capacity,$fuel)
    {
        $this->name=$name;
        $this->capacity=$capacity;
        $this->fuel=$fuel;
    }
    public function name(){
        return "The name of vehicle {$this->name}";
    }
    public function capacity()
    {
        return "The capacity of car {$this->capacity}";
    }
    public function fuel()
    {
        return "Total Fuel of Vechile {$this->fuel}";
    }
}
echo "<br>";
$newCar= new Car("Vlovo",5,10);
echo $newCar->name();
echo "<br>";
echo $newCar->capacity();
echo "<br>";
echo $newCar->fuel();
echo "<br>";

class Saba extends Name{

}
$saba=new Saba("Saba");
$saba->get_name();

abstract class Myname{
    
    public function SayHi(){
        echo "Hello";
    }
    // abstract function __construct();
    abstract function name();
    abstract function fName();
}

class Sara extends Myname{
    public $name;
    public $fname;

    function __construct($name,$fname)
    {
        $this->name=$name;
        $this->fname=$fname;
    }

    function name(){
        return "Ny name is {$this->name}";
    }
    function fName(){
        return "My father name is {$this->fname}";
    }
}
$sara=new Sara("Sara","Sadekul Islam");
echo "<br>";
echo $sara->name();
echo "<br>";
echo $sara->fName();

?>