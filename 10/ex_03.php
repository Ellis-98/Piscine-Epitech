<?php
abstract class Warrior{
public function attack(){
     echo "I'll kill you, poor noob !"."\n";}
     abstract public function represent();
     abstract public function shout();}

class Booba extends Warrior implements GoodManners{
     public function represent(){
     echo "92"."\n";}
     public function shout(){
     echo "Bah bien Morray !";}
     use Singer;}

class LaFouine extends Warrior{
     public function represent(){
     echo "78"."\n";}
     public function shout(){
     echo "Je suis proprietaire !";}
     use Singer;}

interface GoodManners{
    public function say_please();
    public function say_thanks();
    public function say_sorry($name){
    END_WORDS = ",  dirais-je.";}
}
trait Singer{
    public function sing_a_song(){
        $song = "Trololololololol";
        echo $song . "\n";
        $song = str_replace('o', "a", $song);
        echo $song . "\n";
        $song = str_replace("a", "i", $song);
        echo $song . "\n";
}}