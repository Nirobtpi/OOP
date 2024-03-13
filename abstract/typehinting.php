<?php

trait Typehinting
{
    private function Add($value)
    {
        if (is_int($value)) {
            echo $value + 10;
        } else {
            echo  "Please Enter A Number";
        }
    }
    private function furits($values)
    {
        if (is_array($values)) {
            foreach ($values as $val) {
                echo $val . "<br>";
            }
        } else {
            echo "Please enter a valid Data";
        }
    }
}

class Add
{
    use Typehinting {
        Typehinting::Add as public jog;
    }
}
$add = new Add();
$add->jog(10);
echo "<br>";

class Furits
{
    use Typehinting {
        Typehinting::furits as public newFurit;
    }
}

$furits = new Furits();
$furits->newFurit(["Nirob","Saba","Sara"]);
