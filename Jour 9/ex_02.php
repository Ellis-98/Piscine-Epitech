<?php
class MyAttribute{

private string $arg;

public function __construct($foo) {

$this->arg = $foo;

}

public function display(){
     
echo $this->arg."\n";

}
}