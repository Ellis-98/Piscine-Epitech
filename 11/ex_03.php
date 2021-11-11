<?php
namespace Imperium {
     class Soldier{
          private $hp;
          private $attack;
          private $name;
          public function __construct($name, $hp = 50, $attack = 12){
          $this->hp = $hp;
          $this->attack = $attack;
          $this->name = $name;}

     public function doDamage($obj){
          $vitalité = $obj -> getHp() - $this->getAttack();
          $obj->setHp($vitalité);}

     public function __toString(){
          return "$this->name the " . __NAMESPACE__ . " Space Marine : $this->hp HP";}
     
     public function getHp(){
          return $this->hp;}

     public function setHp($hp){
          $this->hp = $hp;}

     public function getAttack(){
          return $this->attack;}

     public function setAttack(){
          $this->attack = $attack;}
     
     public function getName(){
          return $this->name;}

     public function setName(){
          $this->name = $name;}}}

namespace Chaos {
     class Soldier{
          private $hp;
          private $attack;
          private $name;
          public function __construct($name, $hp = 70, $attack = 12){
          $this->hp = $hp;
          $this->attack = $attack;
          $this->name = $name;}

     public function doDamage($obj){
          $vitalité = $obj -> getHp() - $this->getAttack();
          $obj->setHp($vitalité);}

     public function __toString(){
          return "$this->name the " . __NAMESPACE__ . " Space Marine : $this->hp HP";}
     
     public function getHp(){
          return $this->hp;}

     public function setHp($hp){
          $this->hp = $hp;}

     public function getAttack(){
          return $this->attack;}

     public function setAttack(){
          $this->attack = $attack;}
     
     public function getName(){
          return $this->name;}

     public function setName(){
          $this->name = $name;}}}