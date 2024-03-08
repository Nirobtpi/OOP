<?php

class A
{
    public function wealcome()
    {
        echo "Wealcome To My Webpage A";
    }
}
class B
{
    public function wealcome()
    {
        echo "Wealcome To My Webpage B";
    }
}
class C
{
    public function wealcome()
    {
        echo "Wealcome To My Webpage C";
    }
}

$obj = new B();

if ($obj instanceof A) {
    $obj->wealcome();
} else {
    $obj->wealcome();
}
echo "<br>";
echo "<br>";

class Person{
    public $name;
    public $age;

    function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
    public function get_details(){
        echo "My Name Is {$this->name}. I am {$this->age} years old";
    }
}

$nirob=new Person("Nirob",20);
$nirob->name="Nur Alam Nirob";
$nirob->get_details();
echo "<br>";
$nirob=new Person("Saba",7);
$nirob->get_details();
