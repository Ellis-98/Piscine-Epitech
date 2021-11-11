<?php
interface iCars {
     public function getPrice();
     public function getWeight();
     public function mineIsBigger($obj);}

class BMW implements iCars {
     private $_price;
     private $_weight;
public function __construct($_price, $_weight = 4242){
$this -> _price = $_price;
$this -> _weight = $_weight;
}
public static function lessExpensive() {
     return 15000;}
function getPrice($_price) {
     return $this->price;}
function getWeight($_weight) {
     return $this->weight;}
public function mineIsBigger($obj){
     switch (get_class($obj)) {
     case "Toyota":
          echo "Mine is bigger";
          break;
     case "Smart":
          echo "Mine is way bigger !";
          break;
     case "Velib":
          echo "LOL";
          break;
     default:
          echo "show me !";
          }}}

class Suzuki implements iCars {
     private $_price;
     private $_weight;
public function __construct($_price, $_weight = 4242){
$this -> _price = $_price;
$this -> _weight = $_weight;
}
public static function lessExpensive() {
     return 5000;}
function getPrice($_price) {
     return $this->price;}
function getWeight($_weight) {
     return $this->weight;}
public function mineIsBigger($obj){
     switch (get_class($obj)) {
     case "Toyota":
          echo "Mine is bigger";
          break;
     case "Smart":
          echo "Mine is way bigger !";
          break;
     case "Velib":
          echo "LOL";
          break;
     default:
          echo "show me !";
          }}}