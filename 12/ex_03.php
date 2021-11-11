<?php
function rev_epur_str($chaine){
if (is_string($chaine)) {
     $chaine = trim($chaine);
     $reverse = explode(" ", $chaine);
     $reverse = array_reverse($reverse);
     $reverse = implode(' ', $reverse);
     $reverse = preg_replace('/\s+/', ' ', $reverse);
     $reverse = preg_replace('/\t+/', ' ', $reverse);
     return $reverse;} 
     else {
     return FALSE;}}