<?php
class Person{
    public $namme;
    function __construct($n){
        $this->name=$n;
    }
    function show(){
        echo "your name is :". $this->name;
    }
}

$obj =  new Person("ashish kumar");
$obj->show();


?>