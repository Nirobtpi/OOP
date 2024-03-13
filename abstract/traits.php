<?php 
trait Test{
    public $name;
    public function __construct($name){
        $this->name=$name;
    }
    public function get_name(){
        echo $this->name;
    }
    public function say_hi(){
        echo "Say Hi";
    }
}

class A{
    use Test;
}
$test=new A("Nirob");
$test->get_name();
echo "<br>";
$test->say_hi();
echo "<br>";


trait hello{
    function say_hello(){
        echo "Say Hello";
    }
}
trait hi{
    function say_hello(){
        echo "Say Hi";
    }
}
class Say{
    use hello, hi{
        hello::say_hello insteadOf hi;
        hi::say_hello as newHello;
    }
}

$say=new Say();
$say->say_hello();
echo "<br>";
$say->newHello();


?>