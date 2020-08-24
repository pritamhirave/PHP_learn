<?php

class person{
    public $name ;
    public $age;

    function __construct ($name = 0,$age = 0){
        $this->name =$name;
         $this->age =$age;
    }
    function show(){
        echo $this->name . "-" . $this->age ."\n";
    }
}

$p1 = new person("Pritam",23);
$p2 =new person("Seeta",33);
$p3 =new person();

//$p1->name = "Pritam Hirave";
//$p1->age = 23;

$p1->show();

$p2->show();

$p3->show();
?>