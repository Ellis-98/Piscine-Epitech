<?php
function which_is_longer($str1, $str2){
if (is_string($str1) == FALSE || is_string($str2) == FALSE)
return -1;

$l1 = strlen($str1);
$l2 = strlen($str2);

if ($l1 == $l2)
return $l1;

if ($l1 > $l2)
return $l1;

if ($l2 > $l1)
return $l2;
}