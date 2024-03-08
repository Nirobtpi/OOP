<?php
class claculation
{
    public $a, $b;

    function sum()
    {
        return $this->a + $this->b;
    }
    function sub(){
        return $this->a - $this->b;
    }
}

$b = new claculation();
$b->a = 1000;
$b->b = 20;
echo $b->sum();
echo "<br>";
$a = new claculation();
$a->a = 1000;
$a->a = 20;
echo $b->sub(). "<br>";

class myDetails
{
    public $name;
    public $Fname;
    public $Mname;
    public $age;
    public $city;

    function __construct($name, $Fname, $Mname, $age, $city)
    {
        $this->name = $name;
        $this->Fname = $Fname;
        $this->Mname = $Mname;
        $this->age = $age;
        $this->city = $city;
    }

    function Details()
    {
        return "My name is {$this->name} I am {$this->age} years Old. My fatcher name is {$this->Fname}. My mother name is {$this->Mname}. We lives in {$this->city}";
    }
}
$nirob = new myDetails("Nur Alam Nirob", "Shajahan Ali", "Nasima Begum", "24", "Bangladesh Rangpur");
$saba = new myDetails("Masrufa Jahan Saba", "Shajahan Ali", "Nasima Begum", "24", "Bangladesh Rangpur");


// public private protected 

class Fund{
    public $fund;// প্রাইভেট শুধু ক্লাস এর ভিতরে একসেস করতে পারবে ।
    function __construct($initialFund=0)
    {
        $this->fund=$initialFund;
    }
    public function AddFund($money){
        $this->fund +=$money;
    }
    public function DeductFund($money){
        $this->fund -=$money;
    }
    public function GetTotal(){
        echo "Total Fund Is {$this->fund} <br>";
    }
}

$ourfund=new Fund(100);
$ourfund->GetTotal();
$ourfund->AddFund(50);
$ourfund->DeductFund(10);
$ourfund->GetTotal();

?>




<!doctype html>
<html lang="en">

<head>
    <title>This is My Fast OOP</title>
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

        <h2><?php echo $nirob->Details(); ?></h2>
        <h2><?php echo $saba->Details(); ?></h2>



    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>