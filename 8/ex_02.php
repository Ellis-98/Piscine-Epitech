<?php
function my_rounds(float $nb){
  echo  "Results : ".round($nb,0,PHP_ROUND_HALF_EVEN).' - '.ceil($nb).' - '.floor($nb)."\n";

}
 ?>