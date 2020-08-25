<?php

class employee{
    public $name;
    public $age;
    public $salary;

    function __construct($n, $a, $s){
       $this->name = $n;
       $this->age = $a;
       $this->salary = $s;
    }

    function info(){
        echo "Employee Profile<br>";
        echo "Employee name:". $this->name."<br>";
        echo "Employee Age:". $this->age ."<br>";
         echo "Employee salary:". $this->salary."<br>";
    } 
}

class manager extends employee{
   
    }


$e1 = new manager("Ram", "25","12000");

$e1->info();
?>