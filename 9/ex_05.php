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