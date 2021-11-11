<?php

Class Character{
     protected $name;
     protected $endurance = 50;
     protected $strenght = 2;
     protected $agility = 2;
     protected $mana = 2;
     const CLASSE = '';

public function __construct($name){
     $this->name = $name;
}

public function getName(){
     return $this->name;
}

public function getClasse(){
     return $this->CLASSE;
}

public function getEndurance(){
     return $this->endurance;
}

public function getAgility(){
     return $this->agility;
}

public function getMana(){
     return $this->mana;
}

public function getStrenght(){
     return $this->strenght;
}
}

class Mage extends Character {

const CLASSE = 'Mage';
protected $endurance = 70;
protected $strenght = 3;
protected $agility = 10;
protected $mana = 10;

public function __construct($name){
     parent::__construct($name);
     echo "$this->name: May the gods be with me."."/n";
}
public fuction attack(){
     echo "$this->name: Feel the power of my magic !"."/n";
}
public fuction __destroy(){
     echo "$this->name: By the four gods"."/n";
}
}
