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


?>