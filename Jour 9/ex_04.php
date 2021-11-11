<?php
class MyTinyCalculator {

     private $a;
     private $b;
     private $result;

public function __construct($a, $b) {
     $this->setA($a);
     $this->setB($b);
}

public function add() {
     $this->setresult($this->getA() + $this->getB());
     return $this->getA() + $this->getB();
}

public function subtract() {
     $this->setresult($this->getA() - $this->getB());
     return $this->getA() - $this->getB();
}

public function multiply() {
     $this->setresult($this->getA() * $this->getB());
     return $this->getA() * $this->getB();
}

public function divide() {
     $this->setresult($this->getA() / $this->getB());
     return $this->getA() / $this->getB();
}

public function showresult() {
     return $this->getresult();
}
}