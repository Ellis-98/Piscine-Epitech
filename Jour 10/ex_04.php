<?php
class Pony{
     public $name;
     public $gender;
     public $color;

public function __construct($name, $gender, $color){
     $this->name = $name;
     $this->gender = $gender;
     $this->color = $color;
}
public function __toString(){
     return "Don't worry, i'm a pony !"."\n";
}
public function __destruct(){
     echo "I'm a dead pony."."\n"
}
public function setName($name){
     $this->name = $name;
}
public function setGender($gender){
     $this->gender = $gender;
}
public function setColor($color){
     $this->color = $color;
}
}