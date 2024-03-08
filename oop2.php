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
