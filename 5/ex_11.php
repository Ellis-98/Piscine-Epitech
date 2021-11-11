<?php
function print_array_with_key($arr){
     foreach ($arr as $key => $value){
         echo "$value : $key".PHP_EOL;
     }
 }