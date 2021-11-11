<?php
function resum_join_str($str1 = null, $str2 = null){
if(!is_string($str1) || !is_string($str2)){
     return false;}
if(strlen($str1) < 12){
     $third_string = str_repeat(".", 12 - strlen($str1));
     $str1 .= $third_string;}
if(strlen($str2) < 8){
     $fourth_string = str_repeat(".", 8 - strlen($str2));
     $str2 = $fourth_string . $str2;}
return substr($str1, 0, 12) . substr($str2, -8);}