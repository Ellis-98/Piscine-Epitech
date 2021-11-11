<?php
function clear_and_replace($string, $word){
    $string = ltrim($string);
    $string = rtrim($string);
    $string = $output = preg_replace('/\s+/', ' ', $string);
    return preg_replace("/$word/", "Pangolin", $string,2);
}