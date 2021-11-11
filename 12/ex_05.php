<?php
function my_sort(array &$tableau){
static $call = 0;
 
$call++;
$first = array_shift($tableau);
$last = array_pop($tableau); 
array_unshift($tableau, $last); 
array_push($tableau, $first);
echo $call;
print_r($tableau);}