<?php

class Pony {
private $name, $gender, $color;

public function __construct($name, $gender, $color){
     $this->name = $name;
     $this->gender = $gender;
     $this->color = $color;}

public function __call($method,$argument){
     echo "I don't know what to do..."."\n";}

public function __set($name, $value){
     if (! isset($this->$name)){
     echo "Il n'y a pas d'attribut : $name."."\n";}
     else {
     echo "Ce n'est pas bien de setter un attribut qui est privé !"."\n";
     $this->$name = $value;}}

public function __get($name){
     if (! isset($this->$name)){
     echo "Il n'y a pas d'attribut : $name."."\n";}
     else {
     echo "Ce n'est pas bien de getter un attribut qui est privé !"."\n";
     return $this->$name;}}

    public function speak(){
     echo "Hiii hiii hiiii"."\n";}

    public function __toString(){
     return "Don't worry, I'm a pony !"."\n";}

    public function __destruct(){
     echo "I'm a dead pony."."\n";}}