<?php
abstract class A
{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    abstract protected function show();
}

class B extends A
{
    public function show()
    {
        echo $this->name;
    }
}

$b = new B("Nur Alam Nirob1");
$c = new B("Nur Alam Nirob");
$b->show();
echo "<br>";
$c->show();
echo "<br>";

abstract class PraentClass
{

    abstract protected function calc($a, $b);
}

class ChiledClass extends PraentClass
{
    public function calc($a, $b)
    {
        echo $a + $b;
    }
};

$cal = new ChiledClass();
$cal->calc(10, 20);
echo "<br>";
echo "<br>";
echo "<br>";

abstract class Car
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function intro();
}

class Audi extends Car
{
    public function intro()
    {
        return "Choose German quality! I'm an {$this->name}.";
    }
}
class Volvo extends Car{
    public function intro()
    {
        return " Proud to be Swedish! I'm a {$this->name}";
    }
}
class Citroen extends Car{
    public function intro()
    {
        return " French extravagance! I'm a {$this->name}";
    }
}


$audi=new Audi("Audi");
echo $audi->intro();
echo "<br>";
$volvo=new Volvo('Volvo');
echo $volvo->intro();
echo "<br>";
$ci=new Citroen("Citroen");
echo $ci->intro();

echo "<br>";
echo "<br>";
echo "<br>";

abstract class PreficName{
   abstract protected function prefix($name);
}

class Pre extends PreficName{
    public function prefix($name){
        if($name=="Nirob"){
            $prefix="Mr.";
        }else{
            $prefix="Mrs.";
        }
        return "{$prefix} {$name}";
    }
}
$pre=new Pre();
echo $pre->prefix("Nirob");
echo "<br>";
echo $pre->prefix("Saba");