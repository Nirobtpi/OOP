<?php 

class Base{
    public static $name="Nur Alam Nirob";

    function show(){
        echo self::$name;
    }
}
class Drive extends Base{

    public static $name = "Saba";
    function show()
    {
        echo parent::$name;
        echo self::$name;
    }
}
$base= new Drive();
$base->show();
?>