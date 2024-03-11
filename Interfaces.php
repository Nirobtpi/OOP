<?php
interface Praent
{
    public function clc($a, $b);
    public function add($a, $b);
}
// $test=new parent();

class Chiled implements Praent
{
    public function clc($a, $b)
    {
        return $a * $b;
    }
    public function Add($a, $b)
    {
        return $a + $b;
    }
}

$cal = new Chiled();
echo $cal->clc(10, 10);
echo "<br>";
echo $cal->add(10, 10);
echo "<br>";
echo "<br>";
echo "<br>";


interface Animal
{
    public function makeSound($talk);
}

class Dog implements Animal
{
    public function makeSound($talk)
    {
        return $talk;
    }
}
class Cat implements Animal
{
    public function makeSound($talk)
    {
        return $talk;
    }
}

$dog = new Dog();
echo $dog->makeSound("Gaw Gaw");
echo "<br>";
$cat = new Cat();
echo $cat->makeSound("Maik Maik");
echo "<br>";

class MyClass
{
    // public $name;

    protected function add($a, $b)
    {
        return $a + $b;
    }
}

class Add extends MyClass
{
    public function add($a, $b)
    {
        echo $a + $b;
    }
}
$add = new Add();
$add->add(10, 20);

class Sub extends Add
{
    public function add($a, $b)
    {
        echo $a - $b;
    }
}
echo "<br>";
$sub = new Sub();
$sub->add(14, 14);
echo "<br>";
echo "<br>";
echo "<br>";

class INSERT
{
    public $name;

    function Name($name)
    {
        echo $this->name = $name;
    }
}
$name = new INSERT();

if (isset($_GET['submit'])) {
    $name->Name($_GET['name']);
}


class Vichel
{
    public $name;
    public $fuel;

    function __construct($name, $fuel)
    {
        $this->name = $name;
        $this->fuel = $fuel;
    }
    public function Vfuel()
    {
        return $this->name . " " .  $this->fuel;
    }
}

class Airplan extends Vichel
{
    public $color;

    public function __construct($name, $fuel, $color)
    {
        parent::__construct($name, $fuel);
        $this->color = $color;
    }
    public function Vfuel()
    {
        return $this->name . " " . $this->fuel . " " . $this->color;
    }
}
echo "<br>";
$airpaln = new Airplan("Airpaln", "20", "Red");
echo $airpaln->name;
echo $airpaln->fuel;
echo $airpaln->color;
echo $airpaln->Vfuel();
echo "<br>";
echo "<br>";
echo "<br>";

class Fruit
{
    public $name;
    public $color;

    function __construct($name)
    {
        $this->name = $name;
    }
    function __destruct()
    {
        echo "The fruit is {$this->name}.";
    }
}

$apple = new Fruit("Apple");

?>

<!doctype html>
<html lang="en">

<head>
    <title>OOP Class</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>

        <form action="" method="GET">
            <input type="text" name="name">
            <input type="submit" name="submit" value="Submit">
        </form>


    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>